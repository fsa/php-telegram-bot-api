<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class ChatPhoto
{
    public function __construct(
        public string $small_file_id,
        public string $small_file_unique_id,
        public string $big_file_id,
        public string $big_file_unique_id,
    ) {}
}
