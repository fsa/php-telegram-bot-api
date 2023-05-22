<?php

/**
 * Telegram Bot API
 * Вспомогательный класс
 */

namespace FSA\Telegram;

class Helper
{
    private static $config;
    private static $query;
    private static $webhook_chat_id;
    private static $webhook_admin_id;
    private static $webhook;

    public static function init(array $config)
    {
        self::$config = $config;
        if (!isset($config['token'])) {
            throw new TelegramException("Token required.");
        }
        self::$query = new Query($config['token']);
        if (isset($config['proxy'])) {
            self::$query->setProxy($config['proxy']);
        }
        if (isset($config['api_url'])) {
            self::$query->setApiUrl($config['api_url']);
        }
    }

    public static function getConfigVar($name)
    {
        return isset(self::$config[$name]) ? self::$config[$name] : null;
    }

    public static function query()
    {
        return self::$query;
    }

    public static function webhook()
    {
        if (is_null(self::$webhook)) {
            if (isset(self::$config['admin_id'])) {
                self::$webhook_admin_id = self::$config['admin_id'];
                set_exception_handler([self::class, 'Exception']);
            }
            self::$webhook = new Webhook();
        }
        return self::$webhook;
    }

    public static function setExceptionChatId($chat_id)
    {
        self::$webhook_chat_id = $chat_id;
    }

    public static function Exception($ex)
    {
        $class = get_class($ex);
        $class_parts = explode('\\', $class);
        if (end($class_parts) == 'UserException') {
            if (isset(self::$webhook_chat_id)) {
                self::$query->webhookReplyJson(new SendMessage(self::$webhook_chat_id, $ex->getMessage(), 'HTML'));
            }
            exit;
        }
        if (isset(self::$webhook_admin_id)) {
            if (isset(self::$webhook_chat_id)) {
                self::$query->httpPost(new SendMessage(self::$webhook_admin_id, "Произошла ошибка у пользователя " . self::$webhook_chat_id . "\n" . $ex, 'HTML'));
            } else {
                self::$query->httpPost(new SendMessage(self::$webhook_admin_id, "Произошла ошибка\n" . $ex, 'HTML'));
            }
        }
        if (isset(self::$webhook_chat_id)) {
            self::$query->webhookReplyJson(new SendMessage(self::$webhook_chat_id, 'Что-то пошло не так.', 'HTML'));
            exit;
        }
    }
}
