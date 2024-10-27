<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class MessageOrigin
{
    public function __construct(
        public string $type,
        public int $date,
        public ?User $sender_user,
        public ?string $sender_user_name,
        public ?Chat $sender_chat,
        public ?string $author_signature,
        public ?int $message_id,
    ) {}
}
