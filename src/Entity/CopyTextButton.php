<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class CopyTextButton
{
    public function __construct(
        public string $text,
    ) {}
}