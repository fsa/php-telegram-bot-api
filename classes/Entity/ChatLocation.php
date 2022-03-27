<?php

/**
 * Telegram Bot API 5.0
 */

namespace FSA\Telegram\Entity;

class ChatLocation extends AbstractEntity {

    public Location $location;
    public string $address;

}