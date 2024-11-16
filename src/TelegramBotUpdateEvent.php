<?php

namespace FSA\Telegram;

use FSA\Telegram\Entity\Update;
use FSA\Telegram\TelegramBotApi;
use FSA\Telegram\TelegramBotMethodInterface;
use Symfony\Contracts\EventDispatcher\Event;

class TelegramBotUpdateEvent extends Event
{
    public const NAME = 'telegram.bot.webhook.update';

    public readonly TelegramBotApi $api;
    private ?TelegramBotMethodInterface $response = null;

    public function __construct(
        private Update $update
    ) {
        $this->api = new TelegramBotApi;
    }

    public function getUpdate(): Update
    {
        return $this->update;
    }

    public function isPresentInUpdate(string $parameter): bool
    {
        return isset($this->update->$parameter);
    }

    public function setResponse(TelegramBotMethodInterface $method): self
    {
        $this->response = $method;
        $this->stopPropagation();

        return $this;
    }

    public function getResponse(): ?TelegramBotMethodInterface
    {
        return $this->response;
    }
}
