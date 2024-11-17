<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class ChatBoostSource
{
    public function __construct(
        public string $source, //ChatBoostSourcePremium, ChatBoostSourceGiftCode, ChatBoostSourceGiveaway
        public ?User $user, //ChatBoostSourcePremium, ChatBoostSourceGiftCode, ChatBoostSourceGiveaway
        public ?int $giveaway_message_id, //ChatBoostSourceGiveaway
        public ?int $prize_star_count, //ChatBoostSourceGiveaway
        public ?bool $is_unclaimed, //ChatBoostSourceGiveaway
    ) {}
}
