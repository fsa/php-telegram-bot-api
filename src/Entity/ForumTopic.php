<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class ForumTopic
{
    public int $message_thread_id;
    public string $name;
    public int $icon_color;
    public string $icon_custom_emoji_id;
}
