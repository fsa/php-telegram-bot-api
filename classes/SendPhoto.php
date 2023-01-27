<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram;

use CURLFile;

class SendPhoto extends AbstractSendMethod
{
    public $photo;
    public $caption;
    public $parse_mode;
    public $caption_entities;
    public $has_spoiler;

    public function __construct(int|string $chat_id, CURLFile|string $photo)
    {
        $this->setChatId($chat_id);
        $this->setPhoto($photo);
    }

    public function setPhoto(CURLFile|string $photo): static
    {
        $this->photo = $photo;
        return $this;
    }

    public function setCaption(string $caption): static
    {
        $this->caption = $this->removeHtmlEntities($caption);
        return $this;
    }

    public function setParseMode(string $parse_mode): static
    {
        switch ($parse_mode) {
            case 'Markdown':
                $this->setParseModeMarkdown();
                break;
            default:
                $this->parse_mode = $parse_mode;
        }
        return $this;
    }

    public function setParseModeMarkdown(): static
    {
        $this->parse_mode = 'MarkdownV2';
        return $this;
    }

    public function setParseModeHTML(): static
    {
        $this->parse_mode = 'HTML';
        return $this;
    }

    public function setHasSpoiler(bool $has_spoiler = true): static
    {
        $this->has_spoiler = $has_spoiler;
        return $this;
    }
}
