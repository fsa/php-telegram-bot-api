<?php

/**
 * Telegram Bot API 8.0
 * Object
 */

namespace FSA\Telegram\Object;

use CURLFile;

class InputMediaAudio extends InputMedia
{
    public CURLFile|string|null $thumbnail;
    public ?string $caption;
    public ?string $parse_mode;
    /** @var MessageEntity[] */
    public ?array $caption_entities;
    public ?int $duration;
    public ?string $performer;
    public ?string $title;

    public function __construct(
        string $media
    ) {
        parent::__construct('audio', $media);
    }

    public function setThumbnail(CURLFile|string|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    public function setCaption(?string $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    public function setParseMode(?string $parse_mode): self
    {
        $this->parse_mode = $parse_mode;

        return $this;
    }

    /**
     * @param MessageEntity[]|null $caption_entities
     */
    public function setCaptionEntities(?array $caption_entities): self
    {
        $this->caption_entities = $caption_entities;

        return $this;
    }

    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function setPerformer(?string $performer): self
    {
        $this->performer = $performer;

        return $this;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
