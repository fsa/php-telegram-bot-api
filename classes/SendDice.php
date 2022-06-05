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

    public function setEmoji(string $emoji): static
    {
        $this->emoji = $emoji;
        return $this;
    }

    public function setEmojiNum(int $num = 0): static {
        $this->emoji = match ($num) {
            0 => '🎲',
            1 => '🎯',
            2 => '🏀',
            3 => '⚽',
            4 => '🎳',
            5 => '🎰',
            default => '🎲'
        };
        return $this;
    }

    public function buildQuery(): array
    {
        if (is_null($this->chat_id)) {
            throw new AppException('Required: chat_id');
        }
        return parent::buildQuery();
    }
}
