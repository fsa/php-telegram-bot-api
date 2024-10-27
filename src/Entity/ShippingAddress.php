<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class ShippingAddress
{
    public function __construct(
        public string $country_code,
        public string $state,
        public string $city,
        public string $street_line1,
        public string $street_line2,
        public string $post_code,
    ) {}
}
