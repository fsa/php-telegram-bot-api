<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class GiveawayCreated
{
    public function __construct(
        public ?int $prize_star_count,
    ) {}
}
