<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Method;

use FSA\Telegram\Entity\Message;
use FSA\Telegram\TelegramBotParameterException;

#[ResponseEntity(Message::class)]
class SendLocation extends AbstractSendMethod
{
    public float $latitude;
    public float $longitude;
    public ?float $horizontal_accuracy;
    public ?int $live_period;
    public ?int $heading;
    public ?int $proximity_alert_radius;

    public function __construct(int|string $chat_id, float $latitude, float $longitude)
    {
        $this->setChatId($chat_id);
        $this->setLocation($latitude, $longitude);
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
            throw new TelegramBotParameterException('Heading must be between 1 and 360.');
        }
        $this->heading = $heading;
        return $this;
    }

    public function setProximityAlertRadius(int $proximity_alert_radius): static
    {
        if ($proximity_alert_radius < 1 or $proximity_alert_radius > 100000) {
            throw new TelegramBotParameterException('proximity_alert_radius must be between 1 and 100000.');
        }
        $this->proximity_alert_radius = $proximity_alert_radius;
        return $this;
    }
}
