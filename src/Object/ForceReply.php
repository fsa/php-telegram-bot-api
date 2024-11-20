<?php

/**
 * Telegram Bot API 7.10
 * API object ForceReply
 */

namespace FSA\Telegram\Object;

class ForceReply extends AbstractObject implements ReplyMarkupInterface
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
        return json_encode($this->jsonSerialize(), JSON_UNESCAPED_UNICODE|JSON_THROW_ON_ERROR);
    }

    /**
     * @return array<mixed>
     */
    public function jsonSerialize(): array
    {
        $props = get_object_vars($this);
        return array_filter($props, fn ($element) => !is_null($element));
    }
}
