<?php

namespace FSA\Telegram;

abstract class AbstractMethod implements TelegramBotMethodInterface
{
    public function getActionName(): string
    {
        $class = explode('\\', get_class($this));
        return lcfirst(end($class));
    }

    public function buildQuery(): array
    {
        return array_filter(get_object_vars($this), fn ($element) => !empty($element));
    }
}
