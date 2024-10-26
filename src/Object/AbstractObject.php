<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Object;

abstract class AbstractObject implements \JsonSerializable
{
    public function jsonSerialize(): mixed
    {
        $props = get_object_vars($this);
        return array_filter($props, fn ($element) => !is_null($element));
    }
}
