<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class LinkPreviewOptions
{
    public function __construct(
        public ?bool $is_disabled,
        public ?string $url,
        public ?bool $prefer_small_media,
        public ?bool $prefer_large_media,
        public ?bool $show_above_text,
    ) {}
}
