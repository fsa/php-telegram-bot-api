<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class ReplyKeyboardMarkup
{
    /**
     * @Type("array<array<KeyboardButton>>")
     */
    public array $keyboard;
    public ?bool $is_persistent = null;
    public ?bool $resize_keyboard = null;
    public ?bool $one_time_keyboard = null;
    public ?bool $selective = null;
}
