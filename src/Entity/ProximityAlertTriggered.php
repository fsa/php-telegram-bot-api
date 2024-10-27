<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class ProximityAlertTriggered
{
    public function __construct(
        public User $traveler,
        public User $watcher,
        public int $distance,
    ) {}
}
