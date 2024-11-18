<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class ReplyParameters
{
    public function __construct(
        public int $message_id,
        public int|string|null $chat_id,
        public ?bool $allow_sending_without_reply,
        public ?string $quote,
        public ?string $quote_parse_mode,
        /** @var MessageEntity[] */
        public ?array $quote_entities,
        public ?int $quote_position,
    ) {}
}
