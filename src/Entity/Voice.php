<?php

/**
 * Telegram Bot API 5.0
 */

namespace FSA\Telegram\Entity;

class Voice extends AbstractEntity {

    public string $file_id;
    public string $file_unique_id;
    public int $duration;
    public ?string $mime_type=null;
    public ?int $file_size=null;

}
