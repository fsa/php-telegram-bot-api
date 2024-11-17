<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class BusinessOpeningHoursInterval
{
    public function __construct(
        public int $opening_minute,
        public int $closing_minute
    ) {}
}
