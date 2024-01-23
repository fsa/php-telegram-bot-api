<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class KeyboardButtonRequestUsers
{
    public int $request_id;
    public ?bool $user_is_bot = null;
    public ?bool $user_is_premium = null;
    public ?int $max_quantity = null;
}
