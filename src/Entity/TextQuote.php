<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class TextQuote
{
    public function __construct(
        public string $text,
        /** @var MessageEntity[] */
        public ?array $entities,
        public int $position,
        public ?bool $is_manual,
    ) {}
}
