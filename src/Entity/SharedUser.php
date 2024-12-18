<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class SharedUser
{
    public function __construct(
        public int $user_id,
        public ?string $first_name,
        public ?string $last_name,
        public ?string $username,
        /** @var PhotoSize[] */
        public array $photo,
    ) {}
}
