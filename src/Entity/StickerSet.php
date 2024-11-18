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
        /** @var Sticker[] */
        public array $stickers,
        public ?PhotoSize $thumbnail,
    ) {}
}
