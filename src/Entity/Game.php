<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class Game
{
    public string $title;
    public string $description;
    /**
     * @Type("array<PhotoSize>")
     */
    public array $photo;
    public ?string $text = null;
    /**
     * @Type("array<MessageEntity>")
     */
    public ?array $text_entities = null;
    public ?Animation $animation = null;
}
