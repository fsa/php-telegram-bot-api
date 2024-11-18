<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class Story
{
    public function __construct(
        public Chat $chat,
        public int $id,
    ) {}
}
