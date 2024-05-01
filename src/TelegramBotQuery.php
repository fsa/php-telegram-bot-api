<?php

/**
 * Telegram Bot API
 * Отправка запросов на сервер
 */

namespace FSA\Telegram;

class TelegramBotQuery
{
    public function __construct(
        protected string $token,
        protected ?string $proxy = null,
        protected string $api_url = 'https://api.telegram.org',
        protected int $curl_timeout = 5,
        protected int $curl_connect_timeout =3
    ) {
    }

    public function setApiUrl(string $url): static
    {
        $this->api_url = $url;

        return $this;
    }

    public function setProxy(string $proxy): static
    {
        $this->proxy = $proxy;

        return $this;
    }

    public function setCurlTimeout(int $timeout): static
    {
        $this->curl_timeout = $timeout;

        return $this;
    }

    public function setCurlConnectTimeout(int $timeout): static
    {
        $this->curl_connect_timeout = $timeout;

        return $this;
    }

    public function httpPost(TelegramBotMethodInterface $query): object
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url . '/bot' . $this->token . '/' . $query->getMethodName());
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->curl_timeout);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->curl_connect_timeout);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        if (isset($this->proxy)) {
            curl_setopt($ch, CURLOPT_PROXY, $this->proxy);
        }
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query->getRequestParameters());
        $result = curl_exec($ch);
        curl_close($ch);
        if ($result === false) {
            throw new TelegramBotQueryException('Не удалось поучить данные для ' . $query->getMethodName());
        }

        return json_decode($result);
    }

    public function httpPostJson(TelegramBotMethodInterface $query): object
    {
        $query_string = json_encode($query->getRequestParameters(), JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url . '/bot' . $this->token . '/' . $query->getMethodName());
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->curl_timeout);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->curl_connect_timeout);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        if (isset($this->proxy)) {
            curl_setopt($ch, CURLOPT_PROXY, $this->proxy);
        }
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($query_string)
            )
        );
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);
        $result = curl_exec($ch);
        curl_close($ch);
        if ($result === false) {
            throw new TelegramBotQueryException('Не удалось поучить данные для ' . $query->getMethodName());
        }

        return json_decode($result);
    }

    public function httpGet(TelegramBotMethodInterface $query): object
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url . '/bot' . $this->token . '/' . $query->getMethodName() . '?' . http_build_query($query->getRequestParameters()));
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->curl_timeout);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->curl_connect_timeout);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        if (isset($this->proxy)) {
            curl_setopt($ch, CURLOPT_PROXY, $this->proxy);
        }
        $result = curl_exec($ch);
        curl_close($ch);
        if ($result === false) {
            throw new TelegramBotQueryException('Не удалось поучить данные для ' . $query->getMethodName());
        }

        return json_decode($result);
    }

    public function getFileContent(string $file_id): ?string
    {
        $file = $this->httpPost(new GetFile($file_id));
        if (!$file->ok) {
            return null;
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url . '/file/bot' . $this->token . '/' . $file->result->file_path);
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->curl_timeout);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->curl_connect_timeout);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        if (isset($this->proxy)) {
            curl_setopt($ch, CURLOPT_PROXY, $this->proxy);
        }
        $result = curl_exec($ch);
        curl_close($ch);
        if ($result === false) {
            throw new TelegramBotQueryException('Не удалось поучить файл');
        }

        return $result;
    }
}
