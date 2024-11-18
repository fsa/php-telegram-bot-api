<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class KeyboardButtonRequestUsers
{
    public function __construct(
        public int $request_id,
        public ?bool $user_is_bot,
        public ?bool $user_is_premium,
        public ?int $max_quantity,
        public ?bool $request_name,
        public ?bool $request_username,
        public ?bool $request_photo,
    ) {}
}
