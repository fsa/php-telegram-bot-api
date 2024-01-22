<?php

/**
 * Telegram Bot API 5.0
 */

namespace FSA\Telegram\Entity;

class UserProfilePhotos
{
    public int $total_count;
    /**
     * @Type("array<PhotoSize>")
     */
    public array $photos;
}
