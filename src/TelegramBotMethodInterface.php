<?php

namespace FSA\Telegram;

interface TelegramBotMethodInterface
{
    public function getActionName(): string;
    public function buildQuery(): array;
}
