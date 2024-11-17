<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class BusinessOpeningHours
{
    public function __construct(
        public string $time_zone_name,
        /** @var BusinessOpeningHoursInterval[] */
        public array $opening_hours
    ) {}
}
