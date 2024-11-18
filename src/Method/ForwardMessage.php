<?php

/**
 * Telegram Bot API 8.0
 * API method forwardMessage
 */

namespace FSA\Telegram\Method;

use FSA\Telegram\Entity\Message;

class ForwardMessage extends AbstractMethod
{
    public int|string $chat_id;
    public ?int $message_thread_id;
    public int|string $from_chat_id;
    public ?bool $disable_notification;
    public ?bool $protect_content;
    public int $message_id;

    public function __construct(int|string $chat_id, int|string $from_chat_id, int $message_id)
    {
        $this->setChatId($chat_id);
        $this->setFromChatId($from_chat_id);
        $this->setMessageId($message_id);
    }

    public function setChatId(int|string $chat_id): static
    {
        $this->chat_id = $chat_id;

        return $this;
    }

    public function setMessageThreadId(?int $message_thread_id): static
    {
        $this->message_thread_id = $message_thread_id;

        return $this;
    }

    public function setFromChatId(int|string $id): static
    {
        $this->from_chat_id = $id;
        return $this;
    }

    public function setDisableNotification(?bool $disable_notification): static
    {
        $this->disable_notification = $disable_notification;

        return $this;
    }

    public function setProtectContent(?bool $protect_content): static
    {
        $this->protect_content = $protect_content;

        return $this;
    }

    public function setMessageId(int $id): static
    {
        $this->message_id = $id;
        return $this;
    }

    public function getResponseClassName(): ?string
    {
        return Message::class;
    }
}
