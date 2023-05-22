<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class ForumTopicCreated extends AbstractEntity
{

    public string $name;
    public int $icon_color;
    public ?string $icon_custom_emoji_id;
}
