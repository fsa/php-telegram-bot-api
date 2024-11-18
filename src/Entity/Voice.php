<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class Voice
{
    public function __construct(
        public string $file_id,
        public string $file_unique_id,
        public int $duration,
        public ?string $mime_type,
        public ?int $file_size,
    ) {}
}
