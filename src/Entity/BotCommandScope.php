<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class BotCommandScope
{
    public string $type;
    public int|string $chat_id = null;
    public ?int $user_id = null;
}
