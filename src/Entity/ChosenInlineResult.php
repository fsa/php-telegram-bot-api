<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class ChosenInlineResult
{
    public string $result_id;
    public User $from;
    public ?Location $location = null;
    public ?string $inline_message_id = null;
    public string $query;
}
