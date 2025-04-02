<?php

/**
 * Telegram Bot API 6.4
 * Object
 */

namespace FSA\Telegram\Object;

class InlineKeyboardMarkup extends AbstractObject implements ReplyMarkupInterface
{
    /** @var array<InlineKeyboardButton[]> */
    public array $inline_keyboard = [];
    private int $row;

    /**
     * @param array<InlineKeyboardButton[]>|null $buttons
     */
    public function __construct(?array $buttons = null)
    {
        if (!is_null($buttons)) {
            $this->inline_keyboard = $buttons;
        }
        $this->row = 0;
    }

    public function addButton(InlineKeyboardButton $button): static
    {
        $this->inline_keyboard[$this->row][] = clone $button;

        return $this;
    }

    public function nextRow(): static
    {
        $this->row++;
    
        return $this;
    }

    public function __toString(): string
    {
        return json_encode($this->jsonSerialize(), JSON_UNESCAPED_UNICODE|JSON_THROW_ON_ERROR);
    }

    /**
     * @return array<mixed>
     */
    public function jsonSerialize(): array
    {
        $props = get_object_vars($this);
        unset($props['row']);

        return array_filter($props, fn ($element) => !is_null($element));
    }
}
