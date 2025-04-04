<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class Sticker
{
    public function __construct(
        public string $file_id,
        public string $file_unique_id,
        public string $type,
        public int $width,
        public int $height,
        public ?bool $is_animated,
        public ?bool $is_video,
        public ?PhotoSize $thumbnail,
        public ?string $emoji,
        public ?string $set_name,
        public ?File $premium_animation,
        public ?MaskPosition $mask_position,
        public ?string $custom_emoji_id,
        public ?bool $needs_repainting,
        public ?int $file_size,
    ) {}
}
