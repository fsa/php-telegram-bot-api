<?php

/**
 * Telegram Bot API 6.0
 */

namespace FSA\Telegram;

class SendLocation extends SendAbstract
{
    public $latitude;
    public $longitude;
    public $horizontal_accuracy;
    public $live_period;
    public $heading;
    public $proximity_alert_radius;

    public function __construct(int|string $chat_id = null, float $latitude = null, float $longitude = null)
    {
        if (!is_null($chat_id)) {
            $this->setChatId($chat_id);
        }
        if (!is_null($latitude) and !is_null($longitude)) {
            $this->setLocation($latitude, $longitude);
        }
    }

    public function getActionName(): string
    {
        return 'sendLocation';
    }

    public function setLocation(float $latitude, float $longitude): static
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        return $this;
    }

    public function setHorizontalAccuracy(float $accuracy): static
    {
        $this->horizontal_accuracy = $accuracy;
        return $this;
    }

    public function setLivePeriod(int $live_period): static
    {
        $this->live_period = $live_period;
        return $this;
    }

    public function setHeading(int $heading): static
    {
        if ($heading < 1 or $heading > 360) {
            throw new AppException('Heading must be between 1 and 360.');
        }
        $this->heading = $heading;
        return $this;
    }

    public function setProximityAlertRadius(int $proximity_alert_radius): static
    {
        if ($proximity_alert_radius < 1 or $proximity_alert_radius > 100000) {
            throw new AppException('proximity_alert_radius must be between 1 and 100000.');
        }
        $this->proximity_alert_radius = $proximity_alert_radius;
        return $this;
    }

    public function buildQuery(): array
    {
        if (is_null($this->chat_id) or is_null($this->latitude) or is_null($this->longitude)) {
            throw new AppException('Required: chat_id, latitude, longitude');
        }
        return parent::buildQuery();
    }
}
