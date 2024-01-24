# Обёртка для Telegram Bot API на PHP

Данная библиотека может использоваться для упрощения взаимодействия с Telegram Bot API - <https://core.telegram.org/bots/api>. С её помощью можно формировать запросы к API и передавать на сервер, а также поддерживает возможность использовать Webhook.

Данная обёртка может работать как в простых проектах на PHP, так и в составе фреймворков. При использовании библиотеки с фреймворком необходимо создать следующие сервисы (по мере необходимости):

1. TelegramBotApi -- генератор объектов для запроса к API;
2. TelegramBotQuery -- сервис по передаче запросов к API;
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

Дла методов Telegram Bot API созданы соответствующие классы. Отличие имени метода от имени класса в том, что имя класса начинается с заглавной буквы.

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

Создать нужный запрос можно как с помощью класса TelegramBotApi вызвав соответствующий метод, так и непосредственно используя соответствующий класс. Методы и конструкторы классов в качестве аргументов требуют соответствующие обязательные параметры для выбранного запроса. Для установки необязательных аргументов можно использовать цепочки методов, например:

```php
$message = (new FSA\Telegram\SendDice($chat_id, 1))->setDisableNotification()->setProtectContent();
```

или

```php
$message = (new FSA\Telegram\TelegramBotApi)->sendDice($chat_id, 1)->setDisableNotification()->setProtectContent();
```

Если в запросе необходимо прикрепить файл, то сделать это можно с помощью `CURLFile`, в том числе через процедурный стиль:

```php
$file = curl_file_create(realpath('my_photo.jpg'));
$message = (new FSA\Telegram\TelegramBotApi)->sendPhoto($chat_id, $file);
```

## Выполнение запросов на сервер

Запросы на сервер выполняются с помощью методов `httpGet()`, `httpPost()` или `httpPostJson()`. При этом необходимо установить токен доступа в конструкторе `FSA\Telegram\TelegramBotQuery`.

```php
// Создание нового запроса
$telegram_bot_query = new FSA\Telegram\TelegramBotQuery('TOKEN');
// Создание метода sendMessage
$message = new FSA\Telegram\SendMessage($chat_id, "Привет");
// Передача запроса на сервер
$telegram_bot_query->httpPostJson($message);
```

Или при использовании контроллера фреймворка, который передаёт в `$telegramBotApi` сервис `TelegramBotApi`, а в `$telegramBotQuery` -- `TelegramBotQuery`:

```php
$telegramBotQuery->httpPostJson($telegramBotApi->sendMessage($chat_id, 'Привет'));
```

## Работа с WebHook

```php
$webhook = new FSA\Telegram\TelegramBotWebhook('SECRET');
$update = $webhook->getUpdate();
```

Указывать значение `SECRET` необходимо, если вы хотите проверить заголовок `X-Telegram-Bot-Api-Secret-Token` в запросах от сервера.

Данные можно получить в сыром виде, в виде строки:

```php
$update = $webhook->getUpdateRaw();
```

Получать данные запроса можно любое число раз. Оригинальный запрос сохраняется внутри класса и используется при последующих запросах.

Ответ на WebHook может быть получен с помощью метода `getReply()`. Его необходимо передать в формате JSON просто выводя на экран и используя соответствующие HTTP заголовки или, при использовании фреймворков, например, Symfony, в контроллере, при использовании сервисов:

```php
$this->json($telegramBotWebhook->getReply($telegramBotApi->sendMessage($chat_id, "Привет")))->setEncodingOptions(JSON_UNESCAPED_UNICODE);
```

## Сущности Update

При необходимости Update можем быть разобран на сущности с помощью `symfony/serializer` или пакета с аналогичным функционалом. Все необходимые сущности собраны в пространстве имён `Entity`.

```php
$webhook = new FSA\Telegram\Webhook;
$update = $serializer->deserialize($webhook->getUpdateRaw(), FSA\Telegram\Entity\Update::class, 'json');
```

Также, можно использовать классы из пространства имён `Entity` в IDE для формирования подсказок без непосредственного использования.
