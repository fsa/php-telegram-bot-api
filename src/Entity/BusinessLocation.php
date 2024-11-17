<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class BusinessLocation
{
    public function __construct(
        public ?string $address,
        public ?Location $location
    ) {}
}
