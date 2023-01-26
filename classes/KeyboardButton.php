<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram;

class KeyboardButton
{
    public string $text;
    public ?bool $request_contact;
    public ?bool $request_location;
    public ?KeyboardButtonPollType $request_poll;
    public ?WebAppInfo $web_app;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;
        return $this;
    }

    public function setRequestContact(bool $request_contact = true): static
    {
        $this->request_contact = $request_contact;
        return $this;
    }

    public function setRequestLocation(bool $request_location = true): static
    {
        $this->request_location = $request_location;
        return $this;
    }

    public function setRequestPoll(KeyboardButtonPollType $request_poll): static
    {
        $this->request_poll = $request_poll;
        return $this;
    }

    public function setWebApp(WebAppInfo $web_app): static
    {
        $this->web_app = $web_app;
        return $this;
    }
}
