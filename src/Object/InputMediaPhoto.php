<?php

/**
 * Telegram Bot API 8.0
 * Object
 */

namespace FSA\Telegram\Object;

class InputMediaPhoto extends InputMedia
{
    public ?string $caption;
    public ?string $parse_mode;
    /** @var MessageEntity[] */
    public ?array $caption_entities;
    public ?bool $show_caption_above_media;
    public ?bool $has_spoiler;

    public function __construct(
        string $media
    ) {
        parent::__construct('photo', $media);
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

    public function setShowCaptionAboveMedia(?bool $show_caption_above_media): self
    {
        $this->show_caption_above_media = $show_caption_above_media;

        return $this;
    }

    public function setHasSpoiler(?bool $has_spoiler): self
    {
        $this->has_spoiler = $has_spoiler;

        return $this;
    }
}
