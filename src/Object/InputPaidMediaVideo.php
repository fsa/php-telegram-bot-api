<?php

/**
 * Telegram Bot API 8.0
 * Object
 */

namespace FSA\Telegram\Object;

use CURLFile;

class InputPaidMediaVideo extends InputPaidMedia
{
    public CURLFile|string|null $thumbnail;
    public ?int $width;
    public ?int $height;
    public ?int $duration;
    public ?bool $supports_streaming;

    public function __construct(
        string $media
    ) {
        parent::__construct('video', $media);
    }

    public function setThumbnail(CURLFile|string|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    public function setWidth(?int $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function setHeight(?int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function setSupportsStreaming(?bool $supports_streaming): self
    {
        $this->supports_streaming = $supports_streaming;

        return $this;
    }
}
