<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class ForumTopicCreated
{
    public string $name;
    public int $icon_color;
    public ?string $icon_custom_emoji_id = null;
}
