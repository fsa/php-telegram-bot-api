<?php

/**
 * Telegram Bot API
 * Отправка запросов на сервер
 */

namespace FSA\Telegram;

class Query
{
    protected string $token;
    protected string $api_url = 'https://api.telegram.org';
    protected string $proxy;

    public function __construct(string $token)
    {
        $this->token = $token;
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

    public function httpPost(AbstractMethod $query): object
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url . '/bot' . $this->token . '/' . $query->getActionName());
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        if (isset($this->proxy)) {
            curl_setopt($ch, CURLOPT_PROXY, $this->proxy);
        }
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query->buildQuery());
        $result = curl_exec($ch);
        curl_close($ch);
        if ($result === false) {
            throw new TelegramException('Не удалось поучить данные для ' . $query->getActionName());
        }
        return json_decode($result);
    }

    public function httpPostJson(AbstractMethod $query): object
    {
        $query_string = json_encode($query->buildQuery(), JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url . '/bot' . $this->token . '/' . $query->getActionName());
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
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
            throw new TelegramException('Не удалось поучить данные для ' . $query->getActionName());
        }
        return json_decode($result);
    }

    public function httpGet(AbstractMethod $query): object
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url . '/bot' . $this->token . '/' . $query->getActionName() . '?' . http_build_query($query->buildQuery()));
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        if (isset($this->proxy)) {
            curl_setopt($ch, CURLOPT_PROXY, $this->proxy);
        }
        $result = curl_exec($ch);
        curl_close($ch);
        if ($result === false) {
            throw new TelegramException('Не удалось поучить данные для ' . $query->getActionName());
        }
        return json_decode($result);
    }

    public function getFileContent(string $file_id)
    {
        $file = $this->httpPost(new GetFile($file_id));
        if (!$file->ok) {
            return null;
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->api_url . '/file/bot' . $this->token . '/' . $file->result->file_path);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        if (isset($this->proxy)) {
            curl_setopt($ch, CURLOPT_PROXY, $this->proxy);
        }
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
