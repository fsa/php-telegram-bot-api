<?php

/**
 * Telegram Bot API 6.0
 */

namespace FSA\Telegram;

class SendDice extends SendAbstract
{
    public $emoji;

    public function __construct(int|string $chat_id = null, string $emoji = null)
    {
        if (!is_null($chat_id)) {
            $this->setChatId($chat_id);
        }
        if (!is_null($emoji)) {
            $this->setEmoji($emoji);
        }
    }

    public function getActionName(): string
    {
        return 'sendDice';
    }

    public function setEmoji(string $emoji): void
    {
        $this->emoji = $emoji;
    }

    public function buildQuery(): array
    {
        if (is_null($this->chat_id) or is_null($this->latitude) or is_null($this->longitude)) {
            throw new AppException('Required: chat_id, latitude, longitude');
        }
        return parent::buildQuery();
    }
}
