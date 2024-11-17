<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class ForceReply
{
    public function __construct(
        public bool $force_reply,
        public ?string $input_field_placeholder,
        public ?bool $selective,
    ) {}
}
