<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class OrderInfo
{
    public function __construct(
        public ?string $name,
        public ?string $phone_number,
        public ?string $email,
        public ?ShippingAddress $shipping_address,
    ) {}
}
