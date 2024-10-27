<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class Document
{
    public function __construct(
        public string $file_id,
        public string $file_unique_id,
        public ?PhotoSize $thumbnail,
        public ?string $file_name,
        public ?string $mime_type,
        public ?int $file_size,
    ) {}
}
