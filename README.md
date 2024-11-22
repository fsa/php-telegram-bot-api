# Обёртка для Telegram Bot API на PHP

Данная библиотека может использоваться для упрощения взаимодействия с Telegram Bot API - <https://core.telegram.org/bots/api>. С её помощью можно формировать запросы к API и передавать на сервер, а также поддерживает возможность обработки Webhook.

Данная обёртка может работать как в простых проектах на PHP, так и в составе фреймворков. При использовании библиотеки с фреймворком необходимо создать следующие сервисы (по мере необходимости):

1. TelegramBotApi -- генератор объектов для запроса к API;
2. TelegramBotHttpClient -- сервис по передаче запросов к API, для работы требуется composer пакет `symfony/http-client`;
3. TelegramBotWebhook -- вспомогательный сервис для обработки Webhook. Для его работы необходимы пакеты `symfony/serializer` и `symfony/http-foundation`

Пример конфигурации сервисов в Symfony, файл `config/services.yaml`:

```yaml
    FSA\Telegram\TelegramBotApi:

    FSA\Telegram\TelegramBotHttpClient:
        bind:
            $token: '%env(resolve:TELEGRAM_BOT_API_TOKEN)%'

    FSA\Telegram\TelegramBotWebhook:
        bind:
            $secret: '%env(resolve:TELEGRAM_BOT_API_SECRET)%'
```

## Установка

Установите библиотеку с помощью composer:

```bash
composer require fsa/telegram-bot-api
```

## Создание сообщения для запроса на сервер

Для создания запросов к Telegram используется класс TelegramBotApi, который содержит конструкторы методов объектов, необходимых для этого запроса.

Доступные через библиотеку методы API:

* getFile;
* getMe;
* getUpdates;
* getWebhookInfo;
* sendAnimation;
* sendAudio;
* sendDice;
* sendDocument;
* sendLocation;
* sendMessage;
* sendPhoto;
* sendSticker;
* sendVideo;
* setWebhook.

Создать нужный запрос можно с помощью класса `TelegramBotApi` вызвав соответствующий метод. Методы в качестве аргументов требуют соответствующие обязательные параметры для выбранного запроса. Для установки необязательных аргументов можно использовать цепочки методов, например:

```php
$api = new FSA\Telegram\TelegramBotApi;
$message = $api->sendDice($chat_id, 1)->setDisableNotification()->setProtectContent();
```

Если в запросе необходимо прикрепить файл, то сделать это можно с помощью класса `CURLFile`, который можно создать, в том числе, через процедурный стиль:

```php
$file = curl_file_create(realpath('my_photo.jpg'));
$message = $api->sendPhoto($chat_id, $file);
```

## Выполнение запросов на сервер

Для выполнения запросов на сервер используется http клиент Symfony. При необходимости можно задать для него дополнительные настройки, например, указать прокси. Запросы на сервер выполняются с помощью методов класса `FSA\Telegram\TelegramBotHttpClient`: `httpGet()`, `httpPost()` или `httpPostJson()`. При создании экземпляра класса ему необходимо передать токен доступа и, при необходимости, URL сервера, если не не пользуетесь своим локальным сервером вместо `api.telegram.org`.

```php
$api = new FSA\Telegram\TelegramBotApi;
$query = new FSA\Telegram\TelegramBotHttpClient(Symfony\Component\HttpClient\HttpClient::create(), 'TOKEN');
// Создание метода sendMessage
$message = $api->sendMessage($chat_id, "Привет");
// Передача запроса на сервер
$telegram_bot_query->httpPostJson($message);
```

Любой объект для методов API реализует интерфейс `TelegramBotMethodInterface`:

* `getMethodName()` — позволяет получить имя метода API;
* `getRequestParameters()` — параметры запроса в виде массива.

Методы, которые осуществляют отправку сообщений, также реализуют интерфейс `TelegramBotSendMethodInterface`, который, в дополнении к `TelegramBotMethodInterface` также предоставляет доступ к сессерам, которые присутствуют в любом методе с отправкой сообщения, например, `setChatId()` и другие.

## Работа с WebHook

`TelegramBotWebhook` облегчает обработку запросов и написан для использования с фреймворком Symfony. Экземпляр класса может быть извлечён из контейнера путём добавления его в параметры метода контроллера.

Метод `isSecretTokenValid()` проверяет, что секретный токен, указанный заголовке запроса, верный.

Метод `dispatch($eventDispatcher, $callable)` запускает обработку событий и возвращает ответ на запрос. Имеет один обязательный параметр — EventDispatcherInterface и необязательный, который должен содержать функцию, которая формирует событие на случай, если при обработке запроса произойдёт исключительная ситуация. Внутри этой функции передаются два параметра: update_id из запроса и экземпляр произошедшего исключения.

```php
    public function webhook(
        TelegramBotWebhook $webhook,
        EventDispatcherInterface $eventDispatcher
    ): JsonResponse {
        if (!$webhook->isSecretTokenValid()) {
            return $this->json(null, Response::HTTP_UNAUTHORIZED);
        }

        return $this->json($webhook->dispatch($eventDispatcher, fn($update_id, $e) => new AdminNotifyTextMessage('Во время обработки сообщения ' . $update_id . " произошла ошибка.\n" . $e)));
    }
```

## Разбор ответа на сущности

Разбор ответа на сущности не является обязательным, но позволит не проводить проверку наличия определённых полей ответа, т.к. в случае их отсутствия в ответе будет получен `null`. Включить десериализацию ответов можно с помощью установки сериалайзера через `TelegramBotQuery::setSerializer()`. В качестве параметра требуется класс, реализующий `Symfony\Component\Serializer\SerializerInterface`, который можно найти в пакете `symfony/serializer`. После его установки все ответы на методы `httpGet()`, `httpPost()` или `httpPostJson()` будут десериализованы.

```php
$serializer = new Serializer([new ObjectNormalizer()], [new JsonEncoder]);
$query = new FSA\Telegram\TelegramBotHttpClient(Symfony\Component\HttpClient\HttpClient::create(), 'TOKEN');
$query->setSerializer($serializer);
```

Также, можно просто использовать классы из пространства имён `Entity` в IDE для формирования подсказок без непосредственного их использования.
