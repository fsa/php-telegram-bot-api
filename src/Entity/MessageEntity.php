<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class MessageEntity
{
    public string $type;
    public int $offset;
    public int $length;
    public ?string $url = null;
    public ?User $user = null;
    public ?string $language = null;
    public ?string $custom_emoji_id = null;
}
