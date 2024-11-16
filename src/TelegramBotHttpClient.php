<?php

/**
 * Telegram Bot API
 * Отправка запросов на сервер
 */

namespace FSA\Telegram;

use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class TelegramBotHttpClient
{
    protected HttpClientInterface $httpClient;
    protected ?SerializerInterface $serializer = null;

    public function __construct(
        HttpClientInterface $httpClient,
        protected string $token,
        string $api_server_url = 'https://api.telegram.org'
    ) {
        $this->httpClient = $httpClient->withOptions([
            'base_uri' => $api_server_url
        ]);
    }

    public function setSerializer(?SerializerInterface $serializer = null): static
    {
        $this->serializer = $serializer;

        return $this;
    }

    public function requestPost(TelegramBotMethodInterface $query): mixed
    {
        $response = $this->httpClient->request('POST', '/bot' . $this->token . '/' . $query->getMethodName(), [
            'body' => $query->getRequestParameters()
        ]);
        if ($response->getStatusCode() != 200) {
            throw new TelegramBotHttpClientException('Не удалось поучить данные для ' . $query->getMethodName());
        }

        return $this->responseGetResult($response, $query->getResponseClassName());
    }

    public function requestPostJson(TelegramBotMethodInterface $query, bool $serialize = false): mixed
    {
        $response = $this->httpClient->request('POST', '/bot' . $this->token . '/' . $query->getMethodName(), [
            'json' => $query->getRequestParameters()
        ]);
        if ($response->getStatusCode() != 200) {
            throw new TelegramBotHttpClientException('Не удалось поучить данные для ' . $query->getMethodName());
        }

        return $this->responseGetResult($response, $query->getResponseClassName());
    }

    public function requestGet(TelegramBotMethodInterface $query, bool $serialize = false): mixed
    {
        $response = $this->httpClient->request('GET', '/bot' . $this->token . '/' . $query->getMethodName() . '?' . http_build_query($query->getRequestParameters()));

        return $this->responseGetResult($response, $query->getResponseClassName());
    }

    public function getFileContent(string $file_id): ?string
    {
        $file = $this->requestPost(new Method\GetFile($file_id));
        $response = $this->httpClient->request('GET', '/file/bot' . $this->token . '/' . $file->file_path);

        return $response->getContent(true);
    }

    private function responseGetResult(ResponseInterface $response, ?string $class): mixed
    {
        $content = json_decode($response->getContent(true));
        if (!isset($content->ok)) {
            throw new TelegramBotHttpClientException('Неверный ответ сервера');
        };
        if ($content->ok != true) {
            throw new TelegramBotHttpClientException('Сервер сообщает об ошибке обработки запроса для: ' . ($content->description ?? 'отсутствует описание в ответе сервера'));
        }
        if (!isset($content->result)) {
            throw new TelegramBotHttpClientException('Неверный ответ сервера, запрос обработан, но отсутствует результат');
        }

        return ($this->serializer && $class) ? $this->serializer->deserialize(json_encode($content->result), $class, 'json') : $content->result;
    }
}
