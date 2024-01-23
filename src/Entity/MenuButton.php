<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class MenuButton
{
    public string $type;
    public ?string $text = null;
    public ?WebAppInfo $web_app = null;
}
