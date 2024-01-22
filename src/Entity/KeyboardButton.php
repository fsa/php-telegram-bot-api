<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class KeyboardButton
{
    public string $text;
    public ?bool $request_contact;
    public ?bool $request_location;
    public ?KeyboardButtonPollType $request_poll;
    public ?WebAppInfo $web_app;
}
