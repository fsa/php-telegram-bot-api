<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class ChatBoostAdded
{
    public function __construct(
        public int $boost_count,
    ) {}
}