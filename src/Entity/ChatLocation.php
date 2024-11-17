<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class ChatLocation
{
    public function __construct(
        public Location $location,
        public string $address,
    ) {}
}
