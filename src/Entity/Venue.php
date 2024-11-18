<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class Venue
{
    public function __construct(
        public Location $location,
        public string $title,
        public string $address,
        public ?string $forsquare_id,
        public ?string $forsquare_type,
        public ?string $google_place_id,
        public ?string $google_place_type,
    ) {}
}
