<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class ForumTopic
{
    public function __construct(
        public int $message_thread_id,
        public string $name,
        public int $icon_color,
        public ?string $icon_custom_emoji_id,
    ) {}
}
