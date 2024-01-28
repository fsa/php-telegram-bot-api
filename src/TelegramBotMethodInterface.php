<?php

namespace FSA\Telegram;

interface TelegramBotMethodInterface
{
    public function getMethodName(): string;
    public function getRequestParameters(): array;
    public function getWebhookResponse(): array;
}
