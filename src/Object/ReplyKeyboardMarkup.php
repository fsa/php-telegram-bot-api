<?php

/**
 * Telegram Bot API 5.0
 */

namespace FSA\Telegram\Object;

class ReplyKeyboardMarkup extends AbstractObject implements ReplyMarkupInterface
{

    /** @var array<KeyboardButton[]> */
    public array $keyboard;
    public ?bool $is_persistent;
    public ?bool $resize_keyboard = null;
    public ?bool $one_time_keyboard = null;
    public ?bool $selective = null;
    private int $row;

    public function __construct()
    {
        $this->row = 0;
    }

    public function addButton(KeyboardButton $button): static
    {
        $this->keyboard[$this->row][] = clone $button;

        return $this;
    }

    public function nextRow(): static
    {
        $this->row++;

        return $this;
    }

    public function setResizeKeyboard(bool $resize_keyboard = true): static
    {
        $this->resize_keyboard = $resize_keyboard;

        return $this;
    }

    public function setOneTimeKeyboard(bool $one_time_keyboard = true): static
    {
        $this->one_time_keyboard = $one_time_keyboard;

        return $this;
    }

    public function setSelective(bool $selective = true): static
    {
        $this->selective = $selective;

        return $this;
    }

    public function __toString(): string
    {
        return json_encode($this->jsonSerialize(), JSON_UNESCAPED_UNICODE)?:'';
    }

    /**
     * @return array<mixed>
     */
    public function jsonSerialize(): array
    {
        $props = get_object_vars($this);
        unset($props['unsupported']);
        unset($props['row']);
        return array_filter($props, fn ($element) => !is_null($element));
    }
}
