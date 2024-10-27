<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class GiveawayCompleted
{
    public function __construct(
        public int $winner_count,
        public ?int $unclaimed_prize_count,
        public ?Message $giveaway_message,
    ) {}
}
