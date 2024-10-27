<?php

/**
 * Telegram Bot API 7.10
 */

namespace FSA\Telegram\Entity;

readonly class ChatBackground
{
    public function __construct(
        public BackgroundType $type,
    ) {}
}