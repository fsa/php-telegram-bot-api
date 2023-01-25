<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram;

class ForwardMessage extends AbstractMethod
{
    public $chat_id;
    public $message_thread_id;
    public $from_chat_id;
    public $disable_notification;
    public $protect_content;
    public $message_id;

    public function __construct(int|string $chat_id, int|string $from_chat_id, int $message_id)
    {
        $this->setChatId($chat_id);
        $this->setFromChatId($from_chat_id);
        $this->setMessageId($message_id);
    }

    public function setChatId(string $id): static
    {
        $this->chat_id = $id;
        return $this;
    }

    public function setMessageThreadId(int|string $id): static
    {
        $this->message_thread_id = $id;
        return $this;
    }

    public function setFromChatId(int|string $id): static
    {
        $this->from_chat_id = $id;
        return $this;
    }

    public function setDisableNotification(bool $bool = true): static
    {
        $this->disable_notification = $bool;
        return $this;
    }

    public function setProtectContent(bool $protect_content = true): static
    {
        $this->protect_content = $protect_content;
        return $this;
    }

    public function setMessageId(int $id): static
    {
        $this->message_id = $id;
        return $this;
    }
}
