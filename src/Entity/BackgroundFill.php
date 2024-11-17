<?php

/**
 * Telegram Bot API 8.0
 * BackgroundFillSolid +
 * BackgroundFillGradient +
 * BackgroundFillFreeformGradient
 */

namespace FSA\Telegram\Entity;

readonly class BackgroundFill
{
    public function __construct(
        public string $type, //BackgroundFillSolid, BackgroundFillGradient, BackgroundFillFreeformGradient
        public ?int $color, //BackgroundFillSolid
        public ?int $top_color, //BackgroundFillGradient
        public ?int $bottom_color, //BackgroundFillGradient
        public ?int $rotation_angle, //BackgroundFillGradient
        /** @var int[] */
        public ?array $colors, //BackgroundFillFreeformGradient
    ) {}
}