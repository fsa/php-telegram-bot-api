<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class MessageReactionCountUpdated
{
    public function __construct(
        public Chat $chat,
        public int $message_id,
        public int $date,
        /** @var ReactionCount[] */
        public array $reactions,
    ) {}
}
