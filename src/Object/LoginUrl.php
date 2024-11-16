<?php

/**
 * Telegram Bot API 6.4
 * Object
 */

namespace FSA\Telegram\Object;

class LoginUrl extends AbstractObject
{

    public string $url;
    public ?string $forward_text;
    public ?string $bot_username;
    public ?bool $request_write_access;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function setForwardText(string $text): static
    {
        $this->forward_text = $text;

        return $this;
    }

    public function setBotUsername(string $name): static
    {
        $this->bot_username = $name;

        return $this;
    }

    public function setRequestWriteAccess(bool $request_write_access = true): static
    {
        $this->request_write_access = $request_write_access;

        return $this;
    }
}
