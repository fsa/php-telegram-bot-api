<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class ChatShared
{
    public function __construct(
        public int $request_id,
        public int $chat_id,
        public ?string $title,
        public ?string $username,
        /** @var PhotoSize[] */
        public ?array $photo,
    ) {}
}
