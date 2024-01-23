<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class ReactionType
{
    public string $type;
    public ?string $emoji = null;
    public ?string $custom_emoji_id = null;
}
