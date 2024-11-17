<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class Chat
{
    public function __construct(
        public int $id,
        public string $type,
        public ?string $title,
        public ?string $username,
        public ?string $first_name,
        public ?string $last_name,
        public ?bool $is_forum,
    ) {}
}
