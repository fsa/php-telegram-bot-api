<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class UserChatBoosts
{
    public function __construct(
        /**
         * @Type("array<ChatBoost>")
         */
        public array $boosts,
    ) {}
}
