<?php

/**
 * Telegram Bot API 5.0
 */

namespace FSA\Telegram\Entity;

class StickerSet
{
    public string $name;
    public string $title;
    public bool $is_animated;
    public bool $contains_masks;
    /**
     * @Type("array<Sticker>")
     */
    public array $stickers;
    public ?PhotoSize $thumb;
}
