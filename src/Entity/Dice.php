<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class Dice
{
    public function __construct(
        public string $emoji,
        public int $value,
    ) {}
}
