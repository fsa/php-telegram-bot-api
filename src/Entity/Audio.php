<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class Audio
{
    public string $file_id;
    public string $file_unique_id;
    public int $duration;
    public ?string $performer = null;
    public ?string $title = null;
    public ?string $file_name = null;
    public ?string $mime_type = null;
    public ?int $file_size = null;
    public ?PhotoSize $thumb = null;
}
