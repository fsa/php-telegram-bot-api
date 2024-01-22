<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class Location
{
    public float $longitude;
    public float $latitude;
    public ?float $horizontal_accuracy = null;
    public ?int $live_period = null;
    public ?int $heading = null;
    public ?int $proximity_alert_radius = null;
}
