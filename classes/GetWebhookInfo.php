<?php

/**
 * Telegram Bot API 6.0
 */

namespace FSA\Telegram;

class GetWebhookInfo extends Query
{
    public function httpGet(): Entity\WebhookInfo
    {
        $result = parent::httpGet();
        if (isset($result->ok) and $result->ok === true) {
            return new Entity\WebhookInfo(get_object_vars($result->result));
        } else {
            return null;
        }
    }
}
