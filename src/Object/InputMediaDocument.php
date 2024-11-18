<?php

/**
 * Telegram Bot API 8.0
 * Object
 */

namespace FSA\Telegram\Object;

use CURLFile;

class InputMediaDocument extends InputMedia
{
    public CURLFile|string|null $thumbnail;
    public ?string $caption;
    public ?string $parse_mode;
    /** @var MessageEntity[] */
    public ?array $caption_entities;
    public ?bool $disable_content_type_detection;

    public function __construct(
        string $media
    ) {
        parent::__construct('document', $media);
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

    public function setDisableContentTypeDetection(?bool $disable_content_type_detection): self
    {
        $this->disable_content_type_detection = $disable_content_type_detection;

        return $this;
    }
}
