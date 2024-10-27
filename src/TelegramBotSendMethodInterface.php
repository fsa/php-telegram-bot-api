<?php

namespace FSA\Telegram;

use FSA\Telegram\Object\ReplyMarkupInterface;

interface TelegramBotSendMethodInterface extends TelegramBotMethodInterface
{
    public function setChatId(int|string $chat_id): static;
    public function setMessageThreadId(int|string $id): static;
    public function setDisableNotification(bool $bool = true): static;
    public function setProtectContent(bool $protect_content = true): static;
    public function setReplyToMessageId(int $id): static;
    public function setAllowSendingWithoutReply(bool $allow_sending_without_reply = true): static;
    public function setReplyMarkup(ReplyMarkupInterface $keyboard): static;
}
