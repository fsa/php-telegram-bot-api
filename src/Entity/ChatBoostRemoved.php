<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class ChatBoostRemoved
{
    public Chat $chat;
    public string $boost_id;
    public int $remove_date;
    public ChatBoostSource $source;
}
