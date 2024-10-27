<?php

/**
 * Telegram Bot API 7.10
 * BackgroundTypeFill +
 * BackgroundTypeWallpaper +
 * BackgroundTypePattern +
 * BackgroundTypeChatTheme
 */

namespace FSA\Telegram\Entity;

readonly class BackgroundType
{
    public function __construct(
        public string $type,
        public ?Document $document,
        public ?BackgroundFill $fill,
        public ?int $dark_theme_dimming,
        public ?int $intensity,
        public ?bool $is_inverted,
        public ?bool $is_blurred,
        public ?bool $is_moving,
    ) {}
}