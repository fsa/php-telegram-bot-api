<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class ChosenInlineResult
{
    public function __construct(
        public string $result_id,
        public User $from,
        public ?Location $location,
        public ?string $inline_message_id,
        public string $query,
    ) {}
}
