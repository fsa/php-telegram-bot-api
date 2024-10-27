<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class Invoice
{
    public function __construct(
        public string $title,
        public string $description,
        public string $start_parameter,
        public string $currency,
        public int $total_amount,
    ) {}
}
