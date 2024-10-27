<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class KeyboardButtonRequestUsers
{
    public function __construct(
        public int $request_id,
        public ?bool $user_is_bot,
        public ?bool $user_is_premium,
        public ?int $max_quantity,
    ) {}
}
