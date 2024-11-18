<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class ReplyKeyboardRemove
{
    public function __construct(
        public bool $remove_keyboard,
        public ?bool $selective,
    ) {}
}
