<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class ShippingQuery
{
    public function __construct(
        public string $id,
        public User $from,
        public string $invoice_payload,
        public ShippingAddress $shipping_address,
    ) {}
}
