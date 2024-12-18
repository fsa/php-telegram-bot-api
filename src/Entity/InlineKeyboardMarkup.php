<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class InlineKeyboardMarkup
{
    public function __construct(
        /** @var array<InlineKeyboardButton[]> */
        public array $inline_keyboard,
    ) {}
}
