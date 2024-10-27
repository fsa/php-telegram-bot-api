<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class PhotoSize
{
    public function __construct(
        public string $file_id,
        public string $file_unique_id,
        public int $width,
        public int $height,
        public ?int $file_size,
    ) {}
}
