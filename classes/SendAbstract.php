<?php

/**
 * Telegram Bot API 6.0
 */

namespace FSA\Telegram;

class SendAbstract extends Query
{
    public $chat_id;
    public $disable_notification;
    public $protect_content;
    public $reply_to_message_id;
    public $allow_sending_without_reply;
    public $reply_markup;

    public function setChatId(int|string $chat_id): void
    {
        $this->chat_id = $chat_id;
    }

    public function setDisableNotification(bool $bool = true): void
    {
        $this->disable_notification = $bool;
    }

    public function setProtectContent(bool $protect_content = true): void
    {
        $this->protect_content = $protect_content;
    }

    public function setReplyToMessageId(int $id): void
    {
        $this->reply_to_message_id = $id;
    }

    public function setAllowSendingWithoutReply(bool $allow_sending_without_reply = true): void
    {
        $this->allow_sending_without_reply = $allow_sending_without_reply;
    }

    public function setReplyMarkup(Entity\ReplyMarkupInterface $keyboard): void
    {
        $this->reply_markup = $keyboard;
    }

    public function buildQuery(): array
    {
        if (is_null($this->chat_id) or is_null($this->latitude) or is_null($this->longitude)) {
            throw new AppException('Required: chat_id, latitude, longitude');
        }
        return parent::buildQuery();
    }
}
