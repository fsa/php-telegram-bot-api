<?php

/**
 * Telegram Bot API 8.0
 * BackgroundTypeFill +
 * BackgroundTypeWallpaper +
 * BackgroundTypePattern +
 * BackgroundTypeChatTheme
 */

namespace FSA\Telegram\Entity;

readonly class BackgroundType
{
    public function __construct(
        public string $type, //BackgroundType, BackgroundTypeWallpaper, BackgroundTypePattern, BackgroundTypeChatTheme
        public ?Document $document, //BackgroundTypeWallpaper, BackgroundTypePattern
        public ?BackgroundFill $fill, //BackgroundType, BackgroundTypePattern
        public ?int $dark_theme_dimming, //BackgroundType, BackgroundTypeWallpaper
        public ?int $intensity, //BackgroundTypePattern
        public ?bool $is_inverted, //BackgroundTypePattern
        public ?bool $is_blurred, //BackgroundTypeWallpaper
        public ?bool $is_moving, //BackgroundTypeWallpaper, BackgroundTypePattern
        public ?string $theme_name, //BackgroundTypeChatTheme
    ) {}
}