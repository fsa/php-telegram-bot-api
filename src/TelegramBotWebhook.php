<?php

/**
 * Telegram Bot API
 * Обработка webhook
 */

namespace FSA\Telegram;

use FSA\Telegram\Entity\Update;
use JsonException;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Serializer\SerializerInterface;

class TelegramBotWebhook
{
    private string $json;
    protected ?SerializerInterface $serializer = null;

    public function __construct(
        private ?string $secret = null,
        private ?LoggerInterface $logger = null,
        RequestStack $requestStack = null,
    ) {
        if ($requestStack === null) {
            return;
        }
        $request = $requestStack->getCurrentRequest();
        $this->setUpdate($request->getContent());
        if ($secret !== null) {
            $this->verify($request->headers->get('X-Telegram-Bot-Api-Secret-Token'));
        }
    }

    public function setSecret(?string $secret): static
    {
        $this->secret = $secret;

        return $this;
    }

    public function setSerializer(?SerializerInterface $serializer = null): static
    {
        $this->serializer = $serializer;

        return $this;
    }

    public function setUpdate(string $json): static
    {
        $this->json = $json;
        $this->logger?->info('Telegram API Webhook:' . $json);

        return $this;
    }

    public function getUpdate(): string
    {
        return $this->json;
    }

    public function getDecodedUpdate(): object
    {
        try {
            return $this->serializer ? $this->serializer->deserialize($this->json, Update::class, 'json') : json_decode(json: $this->json, flags: JSON_THROW_ON_ERROR);
        } catch (JsonException $ex) {
            throw new TelegramBotWebhookException('JSON syntax error');
        }
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
