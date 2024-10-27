<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class VideoNote
{
    public function __construct(
        public string $file_id,
        public string $file_unique_id,
        public int $length,
        public int $duration,
        public ?PhotoSize $thumb,
        public ?int $file_size,
    ) {}
}
