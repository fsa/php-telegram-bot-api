<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class VideoChatEnded
{
    public function __construct(
        public int $duration,
    ) {}
}
