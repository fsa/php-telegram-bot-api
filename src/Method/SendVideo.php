<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Method;

use CURLFile;
use FSA\Telegram\Object\MessageEntity;

class SendVideo extends AbstractSendMethod
{
    public CURLFile|string $video;
    public ?int $duration;
    public ?int $width;
    public ?int $height;
    public CURLFile|string|null $thumbnail;
    public ?string $caption;
    public ?string $parse_mode;
    /** @var MessageEntity[] */
    public ?array $caption_entities;
    public ?bool $has_spoiler;
    public ?bool $supports_streaming;

    public function __construct(int|string $chat_id, CURLFile|string $video)
    {
        $this->setChatId($chat_id);
        $this->setVideo($video);
    }

    public function setVideo(CURLFile|string $video): static
    {
        $this->video = $video;
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

    public function setThumbnail(CURLFile|string $thumbnail): static
    {
        $this->thumbnail = $thumbnail;
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

    /**
     * @param MessageEntity[] $caption_entities
     */
    public function setCaptionEntities(array $caption_entities): static
    {
        $this->caption_entities = $caption_entities;
        return $this;
    }

    public function addCaptionEntity(MessageEntity $caption_entity): static
    {
        if (!$this->caption_entities) {
            $this->caption_entities = [$caption_entity];
        } else {
            $this->caption_entities[] = $caption_entity;
        }
        return $this;
    }

    public function setHasSpoiler(bool $has_spoiler = true): static
    {
        $this->has_spoiler = $has_spoiler;
        return $this;
    }

    public function setSupportsStreaming(bool $supports_streaming = true): static
    {
        $this->supports_streaming = $supports_streaming;
        return $this;
    }
}
