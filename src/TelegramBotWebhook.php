<?php

/**
 * Telegram Bot API
 * Обработка webhook
 */

namespace FSA\Telegram;

use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Serializer\SerializerInterface;

class TelegramBotWebhook implements LoggerAwareInterface
{
    private string $request_secret_token;
    private string $webhook_update;
    private LoggerInterface $logger;

    public function __construct(
        RequestStack $requestStack,
        private SerializerInterface $serializer,
        private ?string $secret,
    ) {
        $request = $requestStack->getCurrentRequest();
        $this->request_secret_token = $request->headers->get('X-Telegram-Bot-Api-Secret-Token');
        $this->webhook_update = $request->getContent();
    }

    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }

    public function logUpdate(): void
    {
        $this->logger?->debug('Telegram Bot Webhook: ' . $this->webhook_update);
    }

    public function logError(string $message, array $context = []): void
    {
        $this->logger?->error($message, $context);
    }

    public function isSecretTokenValid(): bool
    {
        if (!$this->secret) {
            throw new TelegramBotWebhookException('Secret not set');
        }
        if ($this->request_secret_token != $this->secret) {
            return false;
        };
        return true;
    }

    public function getUpdate(): Entity\Update
    {
        return $this->serializer->deserialize($this->webhook_update, Entity\Update::class, 'json');
    }

    public function getEvent(): TelegramBotUpdateEvent
    {
        return new TelegramBotUpdateEvent($this->getUpdate());
    }

    public function dispatch(EventDispatcherInterface $eventDispatcher, callable $exception_notify = null): ?TelegramBotMethodInterface
    {
        $this->logUpdate();
        $event = $this->getEvent();
        try {
            $eventDispatcher->dispatch($event);
        } catch (\Exception $e) {
            $this->logError('Telegram Bot Update ID ' . $event->getUpdate()->update_id . "\n" . $e);
            if ($exception_notify) {
                $eventDispatcher->dispatch($exception_notify($event->getUpdate()->update_id, $e));
            }
        }

        return $event->getResponse();
    }
}
