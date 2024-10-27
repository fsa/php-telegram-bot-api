<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class ReactionType
{
    public function __construct(
        public string $type,
        public ?string $emoji,
        public ?string $custom_emoji_id,
    ) {}
}
