<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class OrderInfo
{
    public ?string $name = null;
    public ?string $phone_number = null;
    public ?string $email = null;
    public ?ShippingAddress $shipping_address = null;
}
