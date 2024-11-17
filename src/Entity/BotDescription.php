<?php

/**
 * Telegram Bot API 8Ы.0
 */

namespace FSA\Telegram\Entity;

readonly class BotDescription
{
    public function __construct(
        public string $description
    ) {}
}
