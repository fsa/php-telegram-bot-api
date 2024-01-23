<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class GiveawayCompleted
{
    public int $winner_count;
    public ?int $unclaimed_prize_count = null;
    public ?Message $giveaway_message = null;	
}
