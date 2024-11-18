<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class MessageEntity
{
    public function __construct(
        public string $type,
        public int $offset,
        public int $length,
        public ?string $url,
        public ?User $user,
        public ?string $language,
        public ?string $custom_emoji_id,
    ) {}
}
