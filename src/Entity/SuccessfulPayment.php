<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class SuccessfulPayment
{
    public function __construct(
        public string $currency,
        public int $total_amount,
        public string $invoice_payload,
        public ?int $subscription_expiration_date,
        public ?bool $is_recurring,
        public ?bool $is_first_recurring,
        public ?string $shipping_option_id,
        public ?OrderInfo $order_info,
        public string $telegram_payment_charge_id,
        public string $provider_payment_charge_id,
    ) {}
}
