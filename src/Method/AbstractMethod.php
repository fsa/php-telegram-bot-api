<?php

namespace FSA\Telegram\Method;

use FSA\Telegram\TelegramBotMethodInterface;

abstract class AbstractMethod implements TelegramBotMethodInterface
{
    public function getMethodName(): string
    {
        $class = explode('\\', get_class($this));
        return lcfirst(end($class));
    }

    public function getRequestParameters(): array
    {
        return array_filter(get_object_vars($this), fn($element) => !empty($element));
    }

    public function getWebhookResponse(): array
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
