<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Method;

use FSA\Telegram\Entity\Message;
use FSA\Telegram\Object\ReplyMarkupInterface;
use FSA\Telegram\Object\ReplyParameters;
use FSA\Telegram\TelegramBotSendMethodInterface;

class AbstractSendMethod extends AbstractMethod implements TelegramBotSendMethodInterface
{
    public ?string $business_connection_id;
    public int|string $chat_id;
    public ?int $message_thread_id;
    public ?bool $disable_notification;
    public ?bool $protect_content;
    public ?bool $allow_paid_broadcast;
    public ?string $message_effect_id;
    public ?ReplyParameters $reply_parameters;
    public ?string $reply_markup;

    public function setBusinessConnectionId(?string $business_connection_id): static
    {
        $this->business_connection_id = $business_connection_id;

        return $this;
    }

    public function getChatId(): int|string
    {
        return $this->chat_id;
    }

    public function setChatId(int|string $chat_id): static
    {
        $this->chat_id = $chat_id;

        return $this;
    }

    public function setMessageThreadId(int $id): static
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

    public function setAllowPaidBroadcast(?bool $allow_paid_broadcast): static
    {
        $this->allow_paid_broadcast = $allow_paid_broadcast;

        return $this;
    }

    public function setReplyParameters(ReplyParameters $reply_parameters): static
    {
        $this->reply_parameters = $reply_parameters;

        return $this;
    }

    public function setReplyMarkup(ReplyMarkupInterface $keyboard): static
    {
        $this->reply_markup = (string)$keyboard;

        return $this;
    }

    protected function removeHtmlEntities(string $text): string
    {
        return html_entity_decode($text);
    }
}
