<?php

/**
 * Telegram Bot API 5.0
 */

namespace FSA\Telegram\Entity;

class StickerSet
{
    public string $name;
    public string $title;
    public string $sticker_type;
    public ?bool $is_animated = null;
    public ?bool $is_video = null;
    /**
     * @Type("array<Sticker>")
     */
    public array $stickers;
    public ?PhotoSize $thumb = null;
}
