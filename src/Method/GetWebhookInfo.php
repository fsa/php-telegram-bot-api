<?php

/**
 * Telegram Bot API 7.10
 */

namespace FSA\Telegram\Method;

use FSA\Telegram\Entity\WebhookInfo;

#[ResponseEntity(WebhookInfo::class)]
class GetWebhookInfo extends AbstractMethod {}
