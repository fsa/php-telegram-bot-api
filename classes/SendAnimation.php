<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram;

use CURLFile;

class SendAnimation extends AbstractSendMethod
{
    public $animation;
    public $duration;
    public $width;
    public $height;
    public $thumb;
    public $caption;
    public $parse_mode;
    public $caption_entities;
    public $has_spoiler;

    public function __construct(int|string $chat_id, CURLFile|string $animation)
    {
        $this->setChatId($chat_id);
        $this->setAnimation($animation);
    }

    public function setAnimation(CURLFile|string $animation): static
    {
        $this->animation = $animation;
        return $this;
    }

    public function setDuration(int $duration): static
    {
        $this->duration = $duration;
        return $this;
    }

    public function setWidth(int $width): static
    {
        $this->width = $width;
        return $this;
    }

    public function setHeight(int $height): static
    {
        $this->height = $height;
        return $this;
    }

    public function setThumb(CURLFile|string $thumb): static
    {
        $this->thumb = $thumb;
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

    //TODO: setCaptionEntities

    public function setHasSpoiler(bool $has_spoiler = true): static
    {
        $this->has_spoiler = $has_spoiler;
        return $this;
    }
}
