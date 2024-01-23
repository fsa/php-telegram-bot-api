<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class ChatJoinRequest
{
    public Chat $chat;
    public User $from;
    public int $user_chat_id;
    public int $date;
    public ?string $bio = null;
    public ?ChatInviteLink $invite_link = null;
}
