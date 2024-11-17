<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class File
{
    public function __construct(
        public string $file_id,
        public string $file_unique_id,
        public ?int $file_size,
        public ?string $file_path,
    ) {}
}
