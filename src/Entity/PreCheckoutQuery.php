<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class PreCheckoutQuery
{
    public function __construct(
        public string $id,
        public User $from,
        public string $currency,
        public int $total_amount,
        public string $invoice_payload,
        public ?string $shipping_option_id,
        public ?OrderInfo $order_info,
    ) {}
}
