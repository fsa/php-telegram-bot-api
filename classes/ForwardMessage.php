<?php

/**
 * Telegram Bot API 6.0
 */

namespace FSA\Telegram;

class ForwardMessage extends Query {
    public $chat_id;
    public $from_chat_id;
    public $disable_notification;
    public $protect_content;
    public $message_id;

    public function __construct(string $chat_id=null, string $from_chat_id=null, int $message_id=null, bool $disable_notification=null) {
        if (isset($chat_id)) {
            $this->setChatId($chat_id);
        }
        if (isset($from_chat_id)) {
            $this->setFromChatId($from_chat_id);
        }
        if (isset($message_id)) {
            $this->setMessageId($message_id);
        }
        if (isset($disable_notification)) {
            $this->setDisableNotification($disable_notification);
        }
    }

    public function setChatId(string $id): static {
        $this->chat_id=$id;
        return $this;
    }

    public function setFromChatId(string $id): static {
        $this->from_chat_id=$id;
        return $this;
    }

    public function setDisableNotification(bool $bool=true): static {
        $this->disable_notification=$bool;
        return $this;
    }

    public function setProtectContent(bool $protect_content = true): static
    {
        $this->protect_content = $protect_content;
        return $this;
    }

    public function setMessageId(int $id): static {
        $this->message_id=$id;
        return $this;
    }

    public function buildQuery(): array {
        if (is_null($this->chat_id) or is_null($this->from_chat_id) or is_null($this->message_id)) {
            throw new AppException('Required: chat_id, from_chat_id, message_id');
        }
        return parent::buildQuery();
    }

}
