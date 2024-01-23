<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class ReplyKeyboardRemove
{
    public bool $remove_keyboard = true;
    public ?bool $selective = null;
}
