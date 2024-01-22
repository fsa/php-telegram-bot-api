<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class ShippingQuery
{
    public string $id;
    public User $from;
    public string $invoice_payload;
    public ShippingAddress $shipping_address;
}
