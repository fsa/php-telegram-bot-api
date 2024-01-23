<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class InaccessibleMessage
{
    public Chat $chat;
    public int $message_id;
    public int $date;
}
