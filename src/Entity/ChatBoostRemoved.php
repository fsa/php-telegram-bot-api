<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class ChatBoostRemoved
{
    public function __construct(
        public Chat $chat,
        public string $boost_id,
        public int $remove_date,
        public ChatBoostSource $source,
    ) {}
}
