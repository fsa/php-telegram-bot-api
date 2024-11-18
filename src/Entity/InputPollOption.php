<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class InputPollOption
{
    public function __construct(
        public string $text,
        public ?string $text_parse_mode,
        /** @var MessageEntity[] */
        public ?array $text_entities,
    ) {}
}
