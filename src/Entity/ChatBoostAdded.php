<?php

/**
 * Telegram Bot API 7.10
 */

namespace FSA\Telegram\Entity;

readonly class ChatBoostAdded
{
    public function __construct(
        public int $boost_count,
    ) {}
}