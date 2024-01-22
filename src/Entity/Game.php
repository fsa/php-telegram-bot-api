<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class Game
{
    public string $title;
    public string $description;
    public array $photo;
    public ?string $text;
    public ?array $text_entities;
    public ?Animation $animation;
}
