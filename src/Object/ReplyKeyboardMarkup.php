<?php

/**
 * Telegram Bot API 5.0
 */

namespace FSA\Telegram\Object;

class ReplyKeyboardMarkup extends AbstractObject implements ReplyMarkupInterface
{

    public array $keyboard;
    public ?bool $is_persistent;
    public ?bool $resize_keyboard = null;
    public ?bool $one_time_keyboard = null;
    public ?bool $selective = null;
    private $row;

    public function __construct()
    {
        $this->row = 0;
    }

    public function addButton(KeyboardButton $button)
    {
        $this->keyboard[$this->row][] = clone $button;
    }

    public function nextRow()
    {
        $this->row++;
    }

    public function setResizeKeyboard(bool $resize_keyboard = true)
    {
        $this->resize_keyboard = $resize_keyboard;
    }

    public function setOneTimeKeyboard(bool $one_time_keyboard = true)
    {
        $this->one_time_keyboard = $one_time_keyboard;
    }

    public function setSelective(bool $selective = true)
    {
        $this->selective = $selective;
    }

    public function __toString(): string
    {
        return json_encode($this->jsonSerialize(), JSON_UNESCAPED_UNICODE);
    }

    public function jsonSerialize(): array
    {
        $props = get_object_vars($this);
        unset($props['unsupported']);
        unset($props['row']);
        return array_filter($props, fn ($element) => !is_null($element));
    }
}
