<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class MenuButton
{
    public function __construct(
        public string $type, //MenuButtonCommands, MenuButtonWebApp, MenuButtonDefault
        public ?string $text, //MenuButtonWebApp
        public ?WebAppInfo $web_app, //MenuButtonWebApp
    ) {}
}
