<?php

/**
 * Telegram Bot API 8.0
 * Object
 */

namespace FSA\Telegram\Object;

class InputPaidMediaPhoto extends InputPaidMedia
{
    public function __construct(
        string $media
    ) {
        parent::__construct('photo', $media);
    }
}
