<?php

/**
 * Telegram Bot API 6.0
 */

namespace FSA\Telegram\Method;

use FSA\Telegram\Entity\Message;

#[ResponseEntity(Message::class)]
class SendSticker extends AbstractSendMethod
{
    public string $sticker;

    public function __construct(string $chat_id, string $sticker)
    {
        $this->setChatId($chat_id);
        $this->setSticker($sticker);
    }

    public function setSticker(string $sticker): static
    {
        $this->sticker = $sticker;
        return $this;
    }
}
