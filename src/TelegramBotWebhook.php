<?php

/**
 * Telegram Bot API
 * Обработка webhook
 */

namespace FSA\Telegram;

class TelegramBotWebhook
{
    private string $json;

    public function __construct(private ?string $secret = null)
    {
    }

    public function setSecret(?string $secret): static
    {
        $this->secret = $secret;

        return $this;
    }

    public function setUpdate(string $json): static
    {
        $this->json = $json;

        return $this;
    }

    public function getUpdate(): object
    {
        return json_decode(json: $this->json, flags: JSON_THROW_ON_ERROR);
    }

    public function getUpdateRaw(): string
    {
        return $this->json;
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

    public function getReply(AbstractMethod $query): array
    {
        $query_string = $query->buildQuery();
        $query_string['method'] = $query->getActionName();
        return $query_string;
    }
}
