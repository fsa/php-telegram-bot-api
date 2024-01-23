<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class Sticker
{
    public string $file_id;
    public string $file_unique_id;
    public string $type;
    public int $width;
    public int $height;
    public ?bool $is_animated = null;
    public ?bool $is_video = null;
    public ?PhotoSize $thumbnail = null;
    public ?string $emoji = null;
    public ?string $set_name = null;
    public ?File $premium_animation = null;
    public ?MaskPosition $mask_position = null;
    public ?string $custom_emoji_id = null;
    public ?bool $needs_repainting = null;
    public ?int $file_size = null;
}
