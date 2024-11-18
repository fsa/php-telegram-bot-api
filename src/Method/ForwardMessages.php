<?php

/**
 * Telegram Bot API 8.0
 * API method forwardMessage
 */

namespace FSA\Telegram\Method;


class ForwardMessages extends AbstractMethod
{
    public int|string $chat_id;
    public ?int $message_thread_id;
    public int|string $from_chat_id;
    /** @var int[] */
    public array $message_ids;
    public ?bool $disable_notification;
    public ?bool $protect_content;

    /**
     * @param int[] $message_ids
     */
    public function __construct(int|string $chat_id, int|string $from_chat_id, array $message_ids)
    {
        $this->setChatId($chat_id);
        $this->setFromChatId($from_chat_id);
        $this->setMessageIds($message_ids);
    }

    public function setChatId(int|string $chat_id): self
    {
        $this->chat_id = $chat_id;

        return $this;
    }

    public function setMessageThreadId(?int $message_thread_id): self
    {
        $this->message_thread_id = $message_thread_id;

        return $this;
    }

    public function setFromChatId(int|string $id): static
    {
        $this->from_chat_id = $id;
        return $this;
    }


    /**
     * @param int[] $message_ids
     */
    public function setMessageIds(array $message_ids): static
    {
        $this->message_ids = $message_ids;

        return $this;
    }

    public function setDisableNotification(?bool $disable_notification): self
    {
        $this->disable_notification = $disable_notification;

        return $this;
    }

    public function setProtectContent(?bool $protect_content): self
    {
        $this->protect_content = $protect_content;

        return $this;
    }
}
