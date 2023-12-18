# Библиотека PHP для работы с Telegram Bot API

Данная библиотека может использоваться для упрощения взаимодействия с Telegram Bot API - <https://core.telegram.org/bots/api>. С её помощью можно формировать запросы к API и передавать на сервер. Кроме этого, библиотека поддерживает возможность использовать Webhook.

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

Создать нужный запрос можно как с помощью класса TelegramBotApi вызвав соответствующий метод, так и непосредственно используя соовтетствующий класс. Методы и конструкторы классов в качестве аргументов требуют соответствующие обязательные параметры. При установке необязательных аргументов можно использовать цепочки методов, например:

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

Запросы на сервер выполняются с помощью методов `httpGet()`, `httpPost()` или `httpPostJson()`. При этом необходимо установить токен доступа в конструкторе `FSA\Telegram\Query`.

```php
// Создание нового запроса
$query = new FSA\Telegram\Query('TOKEN');
// Создание метода sendMessage
$message = new FSA\Telegram\SendMessage($chat_id, "Привет");
// Передача запроса на сервер
$query->httpPostJson($message);
```

При использовании фреймворков можно просто создать сервис. Например, для Symfony это может выглядеть так:

```yaml
    FSA\Telegram\Query:
        bind:
            $token: '%env(resolve:TELEGRAM_BOT_API_TOKEN)%'
```

## Работа с WebHook

```php
$webhook = new FSA\Telegram\Webhook;
$update = $webhook->getUpdate();
```

Данные можно получить в сыром виде:

```php
$update = $webhook->getUpdateRaw();
```

Получать данные запроса можно любое число раз. Оригинальный запрос сохраняется внутри класса и используется при последующих запросах.

Ответ на WebHook может быть получен с помощью метода `getReply()`. Его необходимо передать в формате JSON. Например, в контроллере Symfony:

```php
$webhook = new FSA\Telegram\Webhook();
$reply=(new \FSA\Telegram\TelegramBotApi())->SendMessage($chat_id, "Привет");
$this->json($webhook->getReply($reply))->setEncodingOptions(JSON_UNESCAPED_UNICODE);
```

## Сущности Update

При необходимости Update можем быть разобран на сущности. Все необходимые сущности собраны в пространстве имён `Entity`.

```php
$webhook = new FSA\Telegram\Webhook;
$update = new FSA\Telegram\Entity\Update($webhook->getUpdate());
```

Операция разбора всего Update выполняется довольно медленно, поэтому можно обойтись разбором только нужных частей, например, `User`, для использования в `MessageEntity`:

```php
$user = new FSA\Telegram\Entity\User($update->callback_query->message->from);
$message_entity->setUser($user);
```

Также можно использовать классы из пространства имён `Entity` в IDE для формирования подсказок без непосредственного использования.
