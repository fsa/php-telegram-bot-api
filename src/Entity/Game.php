<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class Game
{
    public function __construct(
        public string $title,
        public string $description,
        /** @var PhotoSize[] */
        public array $photo,
        public ?string $text,
        /** @var MessageEntity[] */
        public ?array $text_entities,
        public ?Animation $animation,
    ) {}
}
