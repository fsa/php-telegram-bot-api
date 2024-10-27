<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class WriteAccessAllowed
{
    public function __construct(
        public ?bool $from_request,
        public ?string $web_app_name,
        public ?bool $from_attachment_menu,
    ) {}
}
