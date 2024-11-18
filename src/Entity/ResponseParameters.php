<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class ResponseParameters
{
    public function __construct(
        public ?int $migrate_to_chat_id,
        public ?int $retry_after,
    ) {}
}
