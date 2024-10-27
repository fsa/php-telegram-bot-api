<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class MenuButton
{
    public function __construct(
        public string $type,
        public ?string $text,
        public ?WebAppInfo $web_app,
    ) {}
}
