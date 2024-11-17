<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class ChatBackground
{
    public function __construct(
        public BackgroundType $type,
    ) {}
}