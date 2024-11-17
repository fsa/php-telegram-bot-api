<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class PaidMedia
{
    public function __construct(
        public string $type, //PaidMediaPreview, PaidMediaPhoto, PaidMediaVideo
        public ?int $width, //PaidMediaPreview
        public ?int $height, //PaidMediaPreview
        public ?int $duration, //PaidMediaPreview
        /** @var PhotoSize[] */
        public ?array $photo, //PaidMediaPhoto
        public ?Video $video, //PaidMediaVideo
    ) {}
}
