<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class GiveawayWinners
{
    public Chat $chat;
    public int $giveaway_message_id;
    public int $winners_selection_date;
    public int $winner_count;
    /**
     * @Type("array<User>")
     */
    public array $winners;
    public ?int $additional_chat_count = null;
    public ?int $premium_subscription_month_count = null;
    public ?int $unclaimed_prize_count = null;
    public ?bool $only_new_members = null;
    public ?bool $was_refunded = null;
    public ?string $prize_description = null;
}
