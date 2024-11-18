<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class Location
{
    public function __construct(
        public float $longitude,
        public float $latitude,
        public ?float $horizontal_accuracy,
        public ?int $live_period,
        public ?int $heading,
        public ?int $proximity_alert_radius,
    ) {}
}
