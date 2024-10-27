<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class Contact
{
    public function __construct(
        public string $phone_number,
        public string $first_name,
        public ?string $last_name,
        public ?int $user_id,
        public ?string $vcard,
    ) {}
}
