<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class LoginUrl
{
    public string $url;
    public ?string $forward_text = null;
    public ?string $bot_username = null;
    public ?bool $request_write_access = null;
}
