<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class ChatShared
{
    public function __construct(
        public int $request_id,
        public int $chat_id,
    ) {}
}
