<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class LoginUrl
{
    public function __construct(
        public string $url,
        public ?string $forward_text,
        public ?string $bot_username,
        public ?bool $request_write_access,
    ) {}
}
