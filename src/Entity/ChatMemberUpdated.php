<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class ChatMemberUpdated
{
    public Chat $chat;
    public User $from;
    public int $date;
    public ChatMember $old_chat_member;
    public ChatMember $new_chat_member;
    public ?ChatInviteLink $invite_link;
    public ?bool $via_chat_folder_invite_link;
}
