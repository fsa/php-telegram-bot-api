<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class ReplyKeyboardRemove
{
    public bool $remove_keyboard = true;
    public ?bool $selective = null;
}
