<?php

namespace FSA\Telegram;

interface TelegramBotMethodInterface
{
    public function getMethodName(): string;
    /**
     * @return array<mixed>
     */
    public function getRequestParameters(): array;
    public function getResponseClassName(): ?string;
}
