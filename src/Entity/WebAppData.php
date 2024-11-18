<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class WebAppData
{
    public function __construct(
        public string $data,
        public string $button_text,
    ) {}
}
