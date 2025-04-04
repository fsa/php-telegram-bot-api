<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

class Audio
{
    public function __construct(
        public string $file_id,
        public string $file_unique_id,
        public int $duration,
        public ?string $performer,
        public ?string $title,
        public ?string $file_name,
        public ?string $mime_type,
        public ?int $file_size,
        public ?PhotoSize $thumbnail,
    ) {}
}
