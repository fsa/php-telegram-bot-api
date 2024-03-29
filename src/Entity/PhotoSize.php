<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class PhotoSize
{
    public string $file_id;
    public string $file_unique_id;
    public int $width;
    public int $height;
    public ?int $file_size = null;
}
