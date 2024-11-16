<?php

/**
 * Telegram Bot API 5.0
 */

namespace FSA\Telegram\Object;

class ReplyKeyboardRemove extends AbstractObject implements ReplyMarkupInterface
{

    public bool $remove_keyboard = true;
    public ?bool $selective = null;

    public function __construct(bool $selective = null)
    {
        if (!is_null($selective)) {
            $this->selective = $selective;
        }
    }

    public function __toString()
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
        return array_filter($props, fn ($element) => !is_null($element));
    }
}
