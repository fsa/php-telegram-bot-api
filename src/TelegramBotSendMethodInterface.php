<?php

namespace FSA\Telegram;

use FSA\Telegram\Object\ReplyMarkupInterface;
use FSA\Telegram\Object\ReplyParameters;

interface TelegramBotSendMethodInterface extends TelegramBotMethodInterface
{
    public function getChatId(): int|string;
    public function setChatId(int|string $chat_id): static;
    public function setMessageThreadId(int $id): static;
    public function setDisableNotification(bool $bool = true): static;
    public function setProtectContent(bool $protect_content = true): static;
    public function setAllowPaidBroadcast(?bool $allow_paid_broadcast): static;
    public function setReplyParameters(ReplyParameters $reply_parameters): static;
    public function setReplyMarkup(ReplyMarkupInterface $keyboard): static;
}
