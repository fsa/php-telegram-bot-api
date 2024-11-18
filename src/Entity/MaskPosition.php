<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class MaskPosition
{
    public function __construct(
        public string $point,
        public float $x_shift,
        public float $y_shift,
        public float $scale,
    ) {}
}
