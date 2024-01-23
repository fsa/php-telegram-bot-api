<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class KeyboardButton
{
    public string $text;
    public ?KeyboardButtonRequestUsers $request_users = null;
    public ?KeyboardButtonRequestChat $request_chat = null;
    public ?bool $request_contact;
    public ?bool $request_location;
    public ?KeyboardButtonPollType $request_poll;
    public ?WebAppInfo $web_app;
}
