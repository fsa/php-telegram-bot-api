<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class BotCommandScope
{
    public function __construct(
        public string $type,
        public int|string|null $chat_id = null,
        public ?int $user_id = null,
    ) {}
}
