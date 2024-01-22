<?php

/**
 * Telegram Bot API 5.0
 */

namespace FSA\Telegram\Entity;

class InlineQuery
{
    public string $id;
    public User $from;
    public ?Location $location = null;
    public string $query;
    public string $offset;
}
