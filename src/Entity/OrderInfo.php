<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class OrderInfo
{
    public ?string $name;
    public ?string $phone_number;
    public ?string $email;
    public ?ShippingAddress $shipping_address;
}
