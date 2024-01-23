<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class UserProfilePhotos
{
    public int $total_count;
    /**
     * @Type("array<array<PhotoSize>>")
     */
    public array $photos;
}
