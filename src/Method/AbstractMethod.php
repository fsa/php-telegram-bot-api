<?php

namespace FSA\Telegram\Method;

use FSA\Telegram\TelegramBotMethodInterface;
use JsonSerializable;

abstract class AbstractMethod implements TelegramBotMethodInterface, JsonSerializable
{
    public function getMethodName(): string
    {
        $class = explode('\\', get_class($this));
        return lcfirst(end($class));
    }

    /**
     * @return array<mixed>
     */
    public function getRequestParameters(): array
    {
        return array_filter(get_object_vars($this), fn($element) => !empty($element));
    }

    public function jsonSerialize(): mixed
    {
        $query_string = $this->getRequestParameters();
        $query_string['method'] = $this->getMethodName();
        return $query_string;
    }

    public function getResponseClassName(): ?string
    {
        return null;
    }
}
