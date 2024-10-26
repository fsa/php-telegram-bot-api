<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class BotName
{
    public function __construct(
        public string $name
    ) {}
}
