<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class PaidMediaPurchased
{
    public function __construct(
        public User $from,
        public string $paid_media_payload,
    ) {}
}
