<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class BusinessIntro
{
    public function __construct(
        public ?string $title,
        public ?string $message,
        public ?string $sticker,
    ) {}
}
