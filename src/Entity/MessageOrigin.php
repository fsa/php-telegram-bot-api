<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class MessageOrigin
{
    public string $type;
    public int $date;
    public ?User $sender_user = null;
    public ?string $sender_user_name = null;
    public ?Chat $sender_chat = null;
    public ?string $author_signature = null;
    public ?int $message_id = null;
}
