<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class ProximityAlertTriggered
{
    public User $traveler;
    public User $watcher;
    public int $distance;
}
