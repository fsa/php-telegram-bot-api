<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram;

class SendDice extends AbstractSendMethod
{
    public $emoji;

    public function __construct(int|string $chat_id, int|string $emoji)
    {
        $this->setChatId($chat_id);
        if (is_int($emoji)) {
            $this->setEmojiNum($emoji);
        } else {
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
}
