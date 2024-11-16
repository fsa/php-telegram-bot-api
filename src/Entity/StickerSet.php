<?php

/**
 * Telegram Bot API 5.0
 */

namespace FSA\Telegram\Entity;

readonly class StickerSet
{
    public function __construct(
        public string $name,
        public string $title,
        public string $sticker_type,
        public ?bool $is_animated,
        public ?bool $is_video,
        /** @var Sticker[] */
        public array $stickers,
        public ?PhotoSize $thumb,
    ) {}
}
