<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class ReplyKeyboardMarkup
{
    public function __construct(
        /** @var array<KeyboardButton[]> */
        public array $keyboard,
        public ?bool $is_persistent,
        public ?bool $resize_keyboard,
        public ?bool $one_time_keyboard,
        public ?string $input_field_placeholder,
        public ?bool $selective,
    ) {}
}
