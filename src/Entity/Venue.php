<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class Venue
{
    public Location $location;
    public string $title;
    public string $address;
    public ?string $forsquare_id = null;
    public ?string $forsquare_type = null;
    public ?string $google_place_id = null;
    public ?string $google_place_type = null;
}
