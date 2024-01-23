<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class SwitchInlineQueryChosenChat
{
    public ?string $query;
    public ?bool $allow_user_chats = null;
    public ?bool $allow_bot_chats = null;
    public ?bool $allow_group_chats = null;
    public ?bool $allow_channel_chats = null;
}
