<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class PaidMediaInfo
{
    public function __construct(
        public int $star_count,
        /** @var PaidMedia[] */
        public array $paid_media,
    ) {}
}
