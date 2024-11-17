<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class CallbackGame
{
    // @phpstan-ignore-next-line
    private array $params;

    // @phpstan-ignore-next-line
    public function __construct(...$args)
    {
        $this->params = $args;
    }

    // @phpstan-ignore-next-line
    public function getData(): array
    {
        return $this->params;
    }
}
