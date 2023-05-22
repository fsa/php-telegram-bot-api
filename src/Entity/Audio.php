<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class Audio extends AbstractEntity
{

    public string $file_id;
    public string $file_unique_id;
    public int $duration;
    public ?string $performer;
    public ?string $title;
    public ?string $file_name;
    public ?string $mime_type;
    public ?int $file_size;
    public ?PhotoSize $thumb;
}
