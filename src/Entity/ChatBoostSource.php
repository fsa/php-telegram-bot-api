<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class ChatBoostSource
{
    public function __construct(
        #TODO: разные типы ChatBoostSource
        public string $source,
        public ?User $user,
        public ?int $giveaway_message_id,
        public ?bool $is_unclaimed,
    ) {}
}
