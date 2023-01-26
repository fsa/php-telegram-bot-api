<?php

/**
 * Telegram Bot API 5.0
 */

namespace FSA\Telegram;

class ForceReply implements ReplyMarkupInterface
{

    public bool $force_reply;
    public string $input_field_placeholder;
    public ?bool $selective;

    public function __construct(bool $force_reply = true)
    {
        $this->force_reply = $force_reply;
    }

    public function setInputFieldPlaceholder(string $placeholder): static
    {
        $this->input_field_placeholder = $placeholder;
        return $this;
    }

    public function setSelective(bool $selective = true): static
    {
        $this->selective = $selective;
        return $this;
    }

    public function __toString(): string
    {
        return json_encode($this->jsonSerialize(), JSON_UNESCAPED_UNICODE);
    }

    public function jsonSerialize()
    {
        $props = get_object_vars($this);
        return array_filter($props, fn ($element) => !is_null($element));
    }
}
