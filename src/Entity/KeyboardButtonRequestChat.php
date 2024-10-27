<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class KeyboardButtonRequestChat
{
    public function __construct(
        public int $request_id,
        public ?bool $chat_is_channel,
        public ?bool $chat_is_forum,
        public ?bool $chat_has_username,
        public ?bool $chat_is_created,
        public ?ChatAdministratorRights $user_administrator_rights,
        public ?ChatAdministratorRights $bot_administrator_rights,
        public ?bool $bot_is_member,
    ) {}
}
