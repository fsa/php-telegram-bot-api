<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class ForumTopicEdited
{
    public function __construct(
        public ?string $name,
        public ?string $icon_custom_emoji_id,
    ) {}
}
