<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class BotShortDescription
{
    public function __construct(
        public string $short_description
    ) {}
}
