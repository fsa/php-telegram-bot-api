<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class LoginUrl
{
    public string $url;
    public ?string $forward_text;
    public ?string $bot_username;
    public ?bool $request_write_access;
}
