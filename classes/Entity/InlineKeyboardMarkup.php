<?php

/**
 * Telegram Bot API 6.0
 */

namespace FSA\Telegram\Entity;

class InlineKeyboardMarkup extends AbstractEntity implements ReplyMarkupInterface {

    public array $inline_keyboard=[];
    private $row;

    public function __construct(array $buttons=null) {
        if (!is_null($buttons)) {
            $this->inline_keyboard=$buttons;
        }
        $this->row=0;
    }

    public function addButton(InlineKeyboardButton $button): static {
        $this->inline_keyboard[$this->row][]=clone $button;
        return $this;
    }

    public function nextRow(): static {
        $this->row++;
        return $this;
    }

    public function __toString(): string {
        return json_encode($this->jsonSerialize(), JSON_UNESCAPED_UNICODE);
    }

    public function jsonSerialize() {
        $props=get_object_vars($this);
        unset($props['unsupported']);
        unset($props['row']);
        return array_filter($props, fn($element)=>!is_null($element));
    }

}
