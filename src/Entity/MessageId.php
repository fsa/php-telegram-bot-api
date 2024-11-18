<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class MessageId
{
    public function __construct(
        public int $message_id,
    ) {}
}
