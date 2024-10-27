<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class ChatJoinRequest
{
    public function __construct(
        public Chat $chat,
        public User $from,
        public int $user_chat_id,
        public int $date,
        public ?string $bio,
        public ?ChatInviteLink $invite_link,
    ) {}
}
