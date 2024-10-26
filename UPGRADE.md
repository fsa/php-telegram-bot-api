# История изменений

## Версия 0.5

Изменено пространство имён для методов и объектов, используемых методами. Ввиду этого непосредственное обращение к классам не рекомендуется. Если вы это делали ранее, то теперь для создания запросов к API необходимо использовать класс `FSA\Telegram\TelegramBotApi`, который был доступен ранее.

Изменён интерфейс `TelegramBotMethodInterface`. Если ранее для ответа на вебхук необходимо было вызывать метод `getWebhookResponse()`, который был удалён, то теперь можно просто сериализовать объект с запросом к API, например с помощью `json_encode`. Т.е. вместо

```php
$this->json($telegramBotApi->sendMessage($chat_id, "Привет")->getWebhookResponse())->setEncodingOptions(JSON_UNESCAPED_UNICODE);
```

использовать

```php
$this->json($telegramBotApi->sendMessage($chat_id, "Привет"))->setEncodingOptions(JSON_UNESCAPED_UNICODE);
```
