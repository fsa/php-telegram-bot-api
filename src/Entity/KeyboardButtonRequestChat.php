<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class KeyboardButtonRequestChat
{
    public int $request_id;
    public ?bool $chat_is_channel = null;
    public ?bool $chat_is_forum = null;
    public ?bool $chat_has_username = null;
    public ?bool $chat_is_created = null;
    public ?ChatAdministratorRights $user_administrator_rights = null;
    public ?ChatAdministratorRights $bot_administrator_rights = null;
    public ?bool $bot_is_member = null;
}
