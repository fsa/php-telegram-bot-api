<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class KeyboardButtonPollType
{
    public function __construct(
        public ?string $type,
    ) {}
}
