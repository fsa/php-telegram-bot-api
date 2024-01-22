<?php

/**
 * Telegram Bot API 5.0
 */

namespace FSA\Telegram\Entity;

class Contact
{
    public string $phone_number;
    public string $first_name;
    public ?string $last_name = null;
    public ?int $user_id = null;
    public ?string $vcard = null;
}
