<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class SwitchInlineQueryChosenChat
{
    public function __construct(
        public ?string $query,
        public ?bool $allow_user_chats,
        public ?bool $allow_bot_chats,
        public ?bool $allow_group_chats,
        public ?bool $allow_channel_chats,
    ) {}
}
