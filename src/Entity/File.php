<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class File
{
    public string $file_id;
    public string $file_unique_id;
    public ?int $file_size = null;
    public ?string $file_path = null;
}
