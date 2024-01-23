<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class InlineQuery
{
    public string $id;
    public User $from;
    public string $query;
    public string $offset;
    public ?string $chat_type = null;
    public ?Location $location = null;
}
