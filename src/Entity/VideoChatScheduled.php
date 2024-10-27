<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class VideoChatScheduled
{
    public function __construct(
        public int $start_date,
    ) {}
}
