<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class VideoChatScheduled
{
    public function __construct(
        public int $start_date,
    ) {}
}
