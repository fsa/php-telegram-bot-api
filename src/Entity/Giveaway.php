<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class Giveaway
{
    /**
     * @Type("array<Chat>")
     */
    public array $chats;
    public int $winners_selection_date;
    public int $winner_count;
    public ?bool $only_new_members = null;
    public ?bool $has_public_winners = null;
    public ?string $prize_description = null;
    public ?array $country_codes = null;
    public ?int $premium_subscription_month_count = null;
}
