<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Method;

use FSA\Telegram\Entity\Message;
use FSA\Telegram\Object\ReplyMarkupInterface;
use FSA\Telegram\TelegramBotSendMethodInterface;

class AbstractSendMethod extends AbstractMethod implements TelegramBotSendMethodInterface
{
    public $chat_id;
    public $message_thread_id;
    public $disable_notification;
    public $protect_content;
    public $reply_to_message_id;
    public $allow_sending_without_reply;
    public $reply_markup;

    public function setChatId(int|string $chat_id): static
    {
        $this->chat_id = $chat_id;
        return $this;
    }

    public function setMessageThreadId(int|string $id): static
    {
        $this->message_thread_id = $id;
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

    public function setReplyToMessageId(int $id): static
    {
        $this->reply_to_message_id = $id;
        return $this;
    }

    public function setAllowSendingWithoutReply(bool $allow_sending_without_reply = true): static
    {
        $this->allow_sending_without_reply = $allow_sending_without_reply;
        return $this;
    }

    public function setReplyMarkup(ReplyMarkupInterface $keyboard): static
    {
        $this->reply_markup = (string)$keyboard;
        return $this;
    }

    protected function removeHtmlEntities(string $text)
    {
        return html_entity_decode($text);
    }


    public function getResponseClassName(): ?string
    {
        return Message::class;
    }
}
