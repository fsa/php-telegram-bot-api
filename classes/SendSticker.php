<?php

/**
 * Telegram Bot API 6.0
 */

namespace FSA\Telegram;

class SendSticker extends SendAbstract
{
    public $sticker;

    public function __construct(string $chat_id = null, string $sticker = null)
    {
        if (!is_null($chat_id)) {
            $this->setChatId($chat_id);
        }
        if (!is_null($sticker)) {
            $this->setSticker($sticker);
        }
    }

    public function setSticker(string $sticker): static
    {
        $this->sticker = $sticker;
        return $this;
    }

    public function buildQuery(): array
    {
        if (is_null($this->chat_id) or is_null($this->sticker)) {
            throw new AppException('Required: chat_id, sticker');
        }
        return parent::buildQuery();
    }
}
