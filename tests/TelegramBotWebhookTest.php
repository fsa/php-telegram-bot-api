<?php

namespace Tests;

use FSA\Telegram\TelegramBotSecretException;
use FSA\Telegram\TelegramBotWebhook;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;

class TelegramBotWebhookTest extends TestCase
{
    public function testLogger(): void
    {
        $mockLogger = $this->createMock(LoggerInterface::class);
        $mockLogger->expects($this->once())->method('info');
        $webhook = new TelegramBotWebhook(logger: $mockLogger);
        $webhook->setUpdate('{}');
    }

    public function testGetUpdate(): void
    {
        $webhook = new TelegramBotWebhook();
        $webhook->setUpdate('{"test":"test"}');
        $this->assertEquals('{"test":"test"}', $webhook->getUpdate());
    }

    public function testGetDecodedUpdate(): void
    {
        $webhook = new TelegramBotWebhook();
        $webhook->setUpdate('{"test":"test"}');
        $this->assertEquals((object)["test" => "test"], $webhook->getDecodedUpdate());
    }

    public function testVerify(): void
    {
        $secret = 'SECRET';
        $request = new Request(
            content: '{"test":"test"}',
            server: [
                'HTTP_X_TELEGRAM_BOT_API_SECRET_TOKEN' => $secret
            ]
        );
        $webhook = new TelegramBotWebhook('SECRET');
        $this->assertEquals('{"test":"test"}', $webhook->verify($request->headers->get('X-Telegram-Bot-Api-Secret-Token'))->setUpdate($request->getContent())->getUpdate());
        $this->expectException(TelegramBotSecretException::class);
        $webhook->verify('WRONG_SECRET');
    }
}
