<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class PollOption
{
    public function __construct(
        public string $text,
        public int $voter_count,
    ) {}
}
