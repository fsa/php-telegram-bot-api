<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class CallbackGame
{
    private array $params;

    public function __construct(...$args)
    {
        $this->params = $args;
    }

    public function getData(): array
    {
        return $this->params;
    }
}
