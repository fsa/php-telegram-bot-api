<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class UserChatBoosts
{
    public function __construct(
        /** @var ChatBoost[] */
        public array $boosts,
    ) {}
}
