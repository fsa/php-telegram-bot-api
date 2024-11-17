<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class Dice
{
    public function __construct(
        public string $emoji,
        public int $value,
    ) {}
}
