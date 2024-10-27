<?php

/**
 * Telegram Bot API 7.10
 * BackgroundFillSolid +
 * BackgroundFillGradient +
 * BackgroundFillFreeformGradient
 */

namespace FSA\Telegram\Entity;

readonly class BackgroundFill
{
    public function __construct(
        public string $type,
        public ?int $color,
        public ?int $top_color,
        public ?int $bottom_color,
        public ?int $rotation_angle,
        public ?array $colors,
    ) {}
}