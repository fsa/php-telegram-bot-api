<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class GiveawayWinners
{
    public function __construct(
        public Chat $chat,
        public int $giveaway_message_id,
        public int $winners_selection_date,
        public int $winner_count,
        /**
         * @Type("array<User>")
         */
        public array $winners,
        public ?int $additional_chat_count,
        public ?int $premium_subscription_month_count,
        public ?int $unclaimed_prize_count,
        public ?bool $only_new_members,
        public ?bool $was_refunded,
        public ?string $prize_description,
    ) {}
}
