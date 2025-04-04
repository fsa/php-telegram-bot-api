<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class BotCommand
{
    public function __construct(
        public string $command,
        public string $description,
    ) {}
}
