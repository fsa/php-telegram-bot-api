<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class ChatLocation extends AbstractEntity
{

    public Location $location;
    public string $address;
}
