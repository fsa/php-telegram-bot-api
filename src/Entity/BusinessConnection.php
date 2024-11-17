<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class BusinessConnection
{
    public function __construct(
        public string $id,
        public User $user,
        public int $user_chat_id,
        public int $date,
        public bool $can_reply,
        public bool $is_enabled,
    ) {}
}
