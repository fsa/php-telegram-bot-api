<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class UserChatBoosts
{
    public function __construct(
        /** @var ChatBoost[] */
        public array $boosts,
    ) {}
}
