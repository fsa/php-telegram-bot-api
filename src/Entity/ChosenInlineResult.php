<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class ChosenInlineResult extends AbstractEntity
{

    public string $result_id;
    public User $from;
    public ?Location $location;
    public ?string $inline_message_id;
    public string $query;
}
