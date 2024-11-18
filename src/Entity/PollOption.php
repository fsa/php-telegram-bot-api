<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class PollOption
{
    public function __construct(
        public string $text,
        /** @var MessageEntity[] */
        public ?array $text_entities,
        public int $voter_count,
    ) {}
}
