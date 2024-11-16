<?php

/**
 * Telegram Bot API 7.11
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
        /** @var int[] */
        public ?array $colors,
    ) {}
}