<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class VideoNote
{
    public string $file_id;
    public string $file_unique_id;
    public int $length;
    public int $duration;
    public ?PhotoSize $thumb = null;
    public ?int $file_size = null;
}
