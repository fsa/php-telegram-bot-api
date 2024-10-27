<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class ChatBoostUpdated
{
    public function __construct(
        public Chat $chat,
        public ChatBoost $boost,
    ) {}
}
