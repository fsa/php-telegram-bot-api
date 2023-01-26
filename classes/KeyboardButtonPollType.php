<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram;

class KeyboardButtonPollType
{

    public string $type;

    public function __construct()
    {
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }
}
