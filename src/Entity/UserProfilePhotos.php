<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class UserProfilePhotos
{
    public function __construct(
        public int $total_count,
        /**
         * @Type("array<array<PhotoSize>>")
         */
        public array $photos,
    ) {}
}
