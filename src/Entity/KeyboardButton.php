<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class KeyboardButton
{
    public function __construct(
        public string $text,
        public ?KeyboardButtonRequestUsers $request_users,
        public ?KeyboardButtonRequestChat $request_chat,
        public ?bool $request_contact,
        public ?bool $request_location,
        public ?KeyboardButtonPollType $request_poll,
        public ?WebAppInfo $web_app,
    ) {}
}
