<?php

/**
 * Telegram Bot API 7.10
 */

namespace FSA\Telegram\Entity;

readonly class RefundedPayment
{
    public function __construct(
        public string $currency,
        public int $total_amount,
        public string $invoice_payload,
        public string $telegram_payment_charge_id,
        public string $provider_payment_charge_id,
    ) {}
}