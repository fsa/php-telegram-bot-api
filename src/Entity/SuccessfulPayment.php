<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class SuccessfulPayment
{
    public function __construct(
        public string $currency,
        public int $total_amount,
        public string $invoice_payload,
        public ?string $shipping_option_id,
        public ?OrderInfo $order_info,
        public string $telegram_payment_charge_id,
        public string $provider_payment_charge_id,
    ) {}
}
