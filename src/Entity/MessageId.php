<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class MessageId
{
    public function __construct(
        public int $message_id,
    ) {}
}
