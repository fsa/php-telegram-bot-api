<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class Video
{
    public function __construct(
        public string $file_id,
        public string $file_unique_id,
        public int $width,
        public int $height,
        public int $duration,
        public ?PhotoSize $thumbnail,
        public ?string $file_name,
        public ?string $mime_type,
        public ?int $file_size,
    ) {}
}
