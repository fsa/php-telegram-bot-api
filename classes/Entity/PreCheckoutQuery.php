<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class PreCheckoutQuery extends AbstractEntity
{

    public string $id;
    public User $from;
    public string $currency;
    public int $total_amount;
    public string $invoice_payload;
    public ?string $shipping_option_id;
    public ?OrderInfo $order_info;
}
