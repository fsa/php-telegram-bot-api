<?php

/**
 * Telegram Bot API
 * Обработка webhook
 */

namespace FSA\Telegram;

use Psr\Log\LoggerInterface;

class TelegramBotWebhook
{
    private string $json;

    public function __construct(
        private ?string $secret = null,
        private ?LoggerInterface $logger = null
    ) {
    }

    public function setSecret(?string $secret): static
    {
        $this->secret = $secret;

        return $this;
    }

    public function setUpdate(string $json): static
    {
        $this->json = $json;
        $this->logger?->info('Telegram API Webhook', [$json]);

        return $this;
    }

    public function getUpdate(): string
    {
        return $this->json;
    }

    public function getDecodedUpdate(): object
    {
        return json_decode(json: $this->json, flags: JSON_THROW_ON_ERROR);
    }

    /**
     * @param $secret: header X_TELEGRAM_BOT_API_SECRET_TOKEN
     */
    public function verify(?string $secret): static
    {
        if (!$this->secret) {
            throw new TelegramBotSecretException('Secret is not set');
        }
        if ($secret != $this->secret) {
            throw new TelegramBotSecretException('Wrong secret');
        };

        return $this;
    }
}
