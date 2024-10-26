<?php

/**
 * Telegram Bot API
 * Отправка запросов на сервер
 */

namespace FSA\Telegram;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class TelegramBotQuery
{
    protected HttpClientInterface $httpClient;

    public function __construct(
        HttpClientInterface $httpClient,
        protected string $token,
        string $api_server_url = 'https://api.telegram.org',
    ) {
        $this->httpClient = $httpClient->withOptions([
            'base_uri' => $api_server_url
        ]);
    }

    public function httpPost(TelegramBotMethodInterface $query): object
    {
        $response = $this->httpClient->request('POST', '/bot' . $this->token . '/' . $query->getMethodName(), [
            'body' => $query->getRequestParameters()
        ]);
        if ($response->getStatusCode() != 200) {
            throw new TelegramBotQueryException('Не удалось поучить данные для ' . $query->getMethodName());
        }

        return $this->responseGetResult($response);
    }

    public function httpPostJson(TelegramBotMethodInterface $query): object
    {
        $response = $this->httpClient->request('POST', '/bot' . $this->token . '/' . $query->getMethodName(), [
            'json' => $query->getRequestParameters()
        ]);
        if ($response->getStatusCode() != 200) {
            throw new TelegramBotQueryException('Не удалось поучить данные для ' . $query->getMethodName());
        }

        return $this->responseGetResult($response);
    }

    public function httpGet(TelegramBotMethodInterface $query): object
    {
        $response = $this->httpClient->request('GET', '/bot' . $this->token . '/' . $query->getMethodName() . '?' . http_build_query($query->getRequestParameters()));

        return $this->responseGetResult($response);
    }

    public function getFileContent(string $file_id): ?string
    {
        $file = $this->httpPost(new Method\GetFile($file_id));
        $response = $this->httpClient->request('GET', '/file/bot' . $this->token . '/' . $file->file_path);
        
        return $response->getContent(true);
    }

    private function responseGetResult(ResponseInterface $response): object
    {
        $content = json_decode($response->getContent(true));
        if (!isset($content->ok)) {
            throw new TelegramBotQueryException('Неверный ответ сервера');
        };
        if ($content->ok != true) {
            throw new TelegramBotQueryException('Сервер сообщает об ошибке обработки запроса для: ' . $content->description);
        }

        return $content->result;
    }
}
