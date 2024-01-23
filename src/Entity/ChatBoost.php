<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class ChatBoost
{
    public string $boost_id;
    public int $add_date;
    public int $expiration_date;
    public ChatBoostSource $source;
}
