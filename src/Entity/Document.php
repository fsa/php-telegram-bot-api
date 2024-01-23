<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class Document
{
    public string $file_id;
    public string $file_unique_id;
    public ?PhotoSize $thumbnail = null;
    public ?string $file_name = null;
    public ?string $mime_type = null;
    public ?int $file_size = null;
}
