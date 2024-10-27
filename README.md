# Обёртка для Telegram Bot API на PHP

Данная библиотека может использоваться для упрощения взаимодействия с Telegram Bot API - <https://core.telegram.org/bots/api>. С её помощью можно формировать запросы к API и передавать на сервер, а также поддерживает возможность использовать Webhook.

Данная обёртка может работать как в простых проектах на PHP, так и в составе фреймворков. При использовании библиотеки с фреймворком необходимо создать следующие сервисы (по мере необходимости):

1. TelegramBotApi -- генератор объектов для запроса к API;
2. TelegramBotQuery -- сервис по передаче запросов к API, для работы требуется composer пакет `symfony/http-client`;
3. TelegramBotWebhook -- вспомогательный сервис для обработки Webhook.

Пример для Symfony, файл `config/services.yaml`:

```yaml
    FSA\Telegram\TelegramBotApi:

    FSA\Telegram\TelegramBotQuery:
        bind:
            $token: '%env(resolve:TELEGRAM_BOT_API_TOKEN)%'

    FSA\Telegram\TelegramBotWebhook:
        bind:
            $token: '%env(resolve:TELEGRAM_BOT_API_SECRET)%'
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
$message = (new FSA\Telegram\TelegramBotApi)->sendDice($chat_id, 1)->setDisableNotification()->setProtectContent();
```

Если в запросе необходимо прикрепить файл, то сделать это можно с помощью класса `CURLFile`, который можно создать, в том числе, через процедурный стиль:

```php
$file = curl_file_create(realpath('my_photo.jpg'));
$message = (new FSA\Telegram\TelegramBotApi)->sendPhoto($chat_id, $file);
```

## Выполнение запросов на сервер

Для выполнения запросов на сервер используется http клиент Symfony. При необходимости можно задать для него дополнительные настройки, например, указать прокси. Запросы на сервер выполняются с помощью методов класса `FSA\Telegram\TelegramBotQuery`: `httpGet()`, `httpPost()` или `httpPostJson()`. При создании экземпляра класса ему необходимо передать токен доступа и, при необходимости, URL сервера, если не не пользуетесь своим локальным сервером вместо `api.telegram.org`.

```php
$api = new FSA\Telegram\TelegramBotApi;
$query = new FSA\Telegram\TelegramBotQuery(Symfony\Component\HttpClient\HttpClient::create(), 'TOKEN');
// Создание метода sendMessage
$message = $api->sendMessage($chat_id, "Привет");
// Передача запроса на сервер
$telegram_bot_query->httpPostJson($message);
```

Любой объект для методов API реализует интерфейс `TelegramBotMethodInterface`:

* `getMethodName()` — позволяет получить имя метода API;
* `getRequestParameters()` — параметры запроса в виде массива;
* `getResponseClassName` — имя класса сущности в ответе или null, если ответ не возвращает сущностей (например, true, false и т.д.).

Методы, которые осуществляют отправку сообщений, также реализуют интерфейс `TelegramBotSendMethodInterface`, который, в дополнении к `TelegramBotMethodInterface` также предоставляет доступ к сессерам, которые присутствуют в любом методе с отправкой сообщения, например, `setChatId()` и другие.

## Работа с WebHook

Использование `TelegramBotWebhook` не обязательно. Его можно использовать для хранения текущего `Update`, его декодирования и для проверки секретного токена.

```php
$webhook = new FSA\Telegram\TelegramBotWebhook('SECRET');
$update = $webhook->verify($request->headers->get('X-Telegram-Bot-Api-Secret-Token'))->setUpdate($request->getContent())->getDecodedUpdate();
```

Указывать значение `SECRET` необходимо, если вы хотите проверить заголовок `X-Telegram-Bot-Api-Secret-Token` в запросах от сервера.

Данные можно получить в сыром виде, в виде строки:

```php
$update = $webhook->getUpdate();
```

Получать данные запроса можно любое число раз. Оригинальный запрос сохраняется внутри класса.

Ответ на WebHook может быть получен с обычной JSON сериализацией метода API, например, можно отправить ответ в контроллере Symfony следующим образом:

```php
$this->json($telegramBotApi->sendMessage($chat_id, "Привет"))->setEncodingOptions(JSON_UNESCAPED_UNICODE);
```

## Разбор ответа на сущности

Разбор ответа на сущности не является обязательным, но позволит не проводить проверку наличия определённых полей ответа, т.к. в случае их отсутствия в ответе будет получен `null`. Включить десериализацию ответов можно с помощью установки сериалайзера через `TelegramBotQuery::setSerializer()`. В качестве параметра требуется класс, реализующий `Symfony\Component\Serializer\SerializerInterface`, который можно найти в пакете `symfony/serializer`. После его установки все ответы на методы `httpGet()`, `httpPost()` или `httpPostJson()` будут десериализованы.

```php
$serializer = new Serializer([new ObjectNormalizer()], [new JsonEncoder]);
$query = new FSA\Telegram\TelegramBotQuery(Symfony\Component\HttpClient\HttpClient::create(), 'TOKEN');
$query->setSerializer($serializer);
```

Разбор данных вебхука на сущности:

```php
$webhook = new FSA\Telegram\Webhook;
$update = $serializer->deserialize($webhook->getUpdateRaw(), FSA\Telegram\Entity\Update::class, 'json');
```

Также, можно просто использовать классы из пространства имён `Entity` в IDE для формирования подсказок без непосредственного их использования.
