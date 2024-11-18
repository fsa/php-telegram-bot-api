<?php

/**
 * Telegram Bot API 8.0
 * MessageOriginUser
 * MessageOriginHiddenUser
 * MessageOriginChat
 * MessageOriginChannel
 */

namespace FSA\Telegram\Entity;

readonly class MessageOrigin
{
    public function __construct(
        public string $type, //MessageOriginUser, MessageOriginHiddenUser, MessageOriginChat, MessageOriginChannel
        public int $date, //MessageOriginUser, MessageOriginHiddenUser, MessageOriginChat, MessageOriginChannel
        public ?User $sender_user, //MessageOriginUser, MessageOriginChat
        public ?string $sender_user_name, //MessageOriginHiddenUser
        public ?Chat $sender_chat, //MessageOriginChannel
        public ?string $author_signature, //MessageOriginChat, MessageOriginChannel
        public ?int $message_id, //MessageOriginChannel
    ) {}
}
