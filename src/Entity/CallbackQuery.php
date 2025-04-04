<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class CallbackQuery
{
    public function __construct(
        public string $id,
        public User $from,
        public ?Message $message,
        public ?string $inline_message_id,
        public ?string $chat_instance,
        public ?string $data,
        public ?string $game_short_name,
    ) {}
}
