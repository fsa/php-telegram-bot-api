<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class BotName
{
    public function __construct(
        public string $name
    ) {}
}
