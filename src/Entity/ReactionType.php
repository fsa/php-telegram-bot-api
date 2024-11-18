<?php

/**
 * Telegram Bot API 8.0
 * ReactionTypeEmoji
 * ReactionTypeCustomEmoji
 * ReactionTypePaid
 */

namespace FSA\Telegram\Entity;

readonly class ReactionType
{
    public function __construct(
        public string $type, //ReactionTypeEmoji, ReactionTypeCustomEmoji, ReactionTypePaid
        public ?string $emoji, //ReactionTypeEmoji
        public ?string $custom_emoji_id, //ReactionTypeCustomEmoji
    ) {}
}
