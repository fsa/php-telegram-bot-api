<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class ChatBoostSource
{
    #TODO: разные типы ChatBoostSource
    public string $source;
    public ?User $user = null;
    public ?int $giveaway_message_id = null;
    public ?bool $is_unclaimed = null;
}
