<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class Birthdate
{
    public function __construct(
        public int $day,
        public int $month,
        public ?int $year,
    ) {}
}
