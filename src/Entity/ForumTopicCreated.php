<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class ForumTopicCreated
{
    public function __construct(
        public string $name,
        public int $icon_color,
        public ?string $icon_custom_emoji_id,
    ) {}
}
