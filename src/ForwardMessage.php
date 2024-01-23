<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram;

class ForwardMessage extends AbstractSendMethod
{
    public $from_chat_id;
    public $message_id;

    public function __construct(int|string $chat_id, int|string $from_chat_id, int $message_id)
    {
        $this->setChatId($chat_id);
        $this->setFromChatId($from_chat_id);
        $this->setMessageId($message_id);
    }


    public function setFromChatId(int|string $id): static
    {
        $this->from_chat_id = $id;
        return $this;
    }

    public function setMessageId(int $id): static
    {
        $this->message_id = $id;
        return $this;
    }
}
