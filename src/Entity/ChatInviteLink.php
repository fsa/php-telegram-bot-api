<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class ChatInviteLink
{
    public function __construct(
        public string $invite_link,
        public User $creator,
        public ?bool $creates_join_request,
        public ?bool $is_primary,
        public ?bool $is_revoked,
        public ?string $name,
        public ?int $expire_date,
        public ?int $member_limit,
        public ?int $pending_join_request_count,
        public ?int $subscription_period,
        public ?int $subscription_price,
    ) {}
}
