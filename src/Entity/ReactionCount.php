<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class ReactionCount
{
    public function __construct(
        public ReactionType $type,
        public int $total_count,
    ) {}
}
