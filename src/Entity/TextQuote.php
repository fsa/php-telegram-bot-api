<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class TextQuote
{
    public string $text;
    /**
     * @Type("array<MessageEntity>")
     */
    public ?array $entities = null;
    public int $position;
    public ?bool $is_manual = null;
}
