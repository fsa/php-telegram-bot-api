<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class LinkPreviewOptions
{
    public ?bool $is_disabled = null;
    public ?string $url = null;
    public ?bool $prefer_small_media = null;
    public ?bool $prefer_large_media = null;
    public ?bool $show_above_text = null;
}
