<?php

/**
 * Telegram Bot API 6.0
 */

namespace FSA\Telegram;

class Webhook
{
    private $json;

    public function __construct()
    {
    }

    public function getUpdate()
    {
        return json_decode(json: $this->getUpdateRaw(), flags: JSON_THROW_ON_ERROR);
    }

    public function getUpdateRaw()
    {
        if (is_null($this->json)) {
            $this->json = file_get_contents('php://input');
        }
        return $this->json;
    }

    public function replyJson(AbstractMethod $query): void
    {
        $query_string = $query->buildQuery();
        $query_string['method'] = $query->getActionName();
        header('Content-Type: application/json');
        echo json_encode($query_string, JSON_UNESCAPED_UNICODE);
        exit;
    }
}
