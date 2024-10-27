<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class InlineQuery
{
    public function __construct(
        public string $id,
        public User $from,
        public string $query,
        public string $offset,
        public ?string $chat_type,
        public ?Location $location,
    ) {}
}
