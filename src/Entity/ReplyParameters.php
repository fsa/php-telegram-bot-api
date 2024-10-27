<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class ReplyParameters
{
    public function __construct(
        public int $message_id,
        public int|string|null $emoji,
        public ?bool $allow_sending_without_reply,
        public ?string $quote,
        public ?string $quote_parse_mode,
        /**
         * @Type("array<MessageEntity>")
         */
        public ?array $quote_entities,
        public ?int $quote_position,
    ) {}
}
