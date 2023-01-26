<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class ReplyKeyboardMarkup extends AbstractEntity
{

    public array $keyboard;
    public ?bool $is_persistent; 
    public ?bool $resize_keyboard = null;
    public ?bool $one_time_keyboard = null;
    public ?bool $selective = null;
}
