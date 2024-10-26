<?php

/**
 * Telegram Bot API 7.10
 */

namespace FSA\Telegram\Method;

use FSA\Telegram\Entity\WebhookInfo;

class GetWebhookInfo extends AbstractMethod
{
    public function getResponseClassName(): ?string
    {
        return WebhookInfo::class;
    }
}
