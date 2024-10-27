<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class MessageAutoDeleteTimerChanged
{
    public function __construct(
        public int $message_auto_delete_time,
    ) {}
}
