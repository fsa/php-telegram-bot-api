<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class BusinessMessagesDeleted
{
    /**
     * @param int[] $message_ids
     */
    public function __construct(
        public string $business_connection_id,
        public Chat $chat,
        public array $message_ids,
    ) {}
}
