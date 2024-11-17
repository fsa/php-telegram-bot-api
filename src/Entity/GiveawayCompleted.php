<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class GiveawayCompleted
{
    public function __construct(
        public int $winner_count,
        public ?int $unclaimed_prize_count,
        public ?Message $giveaway_message,
        public ?bool $is_star_giveaway,
    ) {}
}
