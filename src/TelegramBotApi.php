<?php

namespace FSA\Telegram;

use CURLFile;

class TelegramBotApi
{
    public function close(): Method\Close
    {
        return new Method\Close;
    }

    public function deleteWebhook(): Method\DeleteWebhook
    {
        return new Method\DeleteWebhook;
    }

    public function forceReply(bool $force_reply = true): Object\ForceReply
    {
        return new Object\ForceReply($force_reply);
    }

    public function forwardMessage(int|string $chat_id, int|string $from_chat_id, int $message_id): Method\ForwardMessage
    {
        return new Method\ForwardMessage($chat_id, $from_chat_id, $message_id);
    }

    public function getFile(string $file_id): Method\GetFile
    {
        return new Method\GetFile($file_id);
    }

    public function getMe(): Method\GetMe
    {
        return new Method\GetMe;
    }

    public function getMyDescription(): Method\GetMyDescription
    {
        return new Method\GetMyDescription;
    }

    public function getMyShortDescription(): Method\GetMyShortDescription
    {
        return new Method\GetMyShortDescription;
    }

    public function getUpdates(): Method\GetUpdates
    {
        return new Method\GetUpdates;
    }

    public function getWebhookInfo(): Method\GetWebhookInfo
    {
        return new Method\GetWebhookInfo;
    }

    public function InlineKeyboardButton(string $text): Object\InlineKeyboardButton
    {
        return new Object\InlineKeyboardButton($text);
    }

    public function InlineKeyboardMarkup(array $buttons = null): Object\InlineKeyboardMarkup
    {
        return new Object\InlineKeyboardMarkup($buttons);
    }

    public function KeyboardButton(string $text): Object\KeyboardButton
    {
        return new Object\KeyboardButton($text);
    }

    public function KeyboardButtonPoolType(): Object\KeyboardButtonPollType
    {
        return new Object\KeyboardButtonPollType;
    }

    public function LoginUrl(string $url): Object\LoginUrl
    {
        return new Object\LoginUrl($url);
    }

    public function logOut(): Method\LogOut
    {
        return new Method\LogOut;
    }

    public function MessageEntity($type, $offset, $length): Object\MessageEntity
    {
        return new Object\MessageEntity($type, $offset, $length);
    }

    public function ReplyKeyboardMarkup(): Object\ReplyKeyboardMarkup
    {
        return new Object\ReplyKeyboardMarkup;
    }

    public function ReplyKeyboardRemove(bool $selective = null): Object\ReplyKeyboardRemove
    {
        return new Object\ReplyKeyboardRemove($selective);
    }

    public function sendAnimation(int|string $chat_id, CURLFile|string $animation): Method\SendAnimation
    {
        return new Method\SendAnimation($chat_id, $animation);
    }

    public function sendAudio(int|string $chat_id, CURLFile|string $audio): Method\SendAudio
    {
        return new Method\SendAudio($chat_id, $audio);
    }

    public function sendDice(int|string $chat_id, int|string $emoji): Method\SendDice
    {
        return new Method\SendDice($chat_id, $emoji);
    }

    public function sendDocument(int|string $chat_id, CURLFile|string $document): Method\SendDocument
    {
        return new Method\SendDocument($chat_id, $document);
    }

    public function sendLocation(int|string $chat_id, float $latitude, float $longitude): Method\SendLocation
    {
        return new Method\SendLocation($chat_id, $latitude, $longitude);
    }

    public function sendMessage(int|string $chat_id, string $text = null, string $parse_mode = null): Method\SendMessage
    {
        return new Method\SendMessage($chat_id, $text, $parse_mode);
    }

    public function sendPhoto(int|string $chat_id, CURLFile|string $photo): Method\SendPhoto
    {
        return new Method\SendPhoto($chat_id, $photo);
    }

    public function sendSticker(string $chat_id, string $sticker): Method\SendSticker
    {
        return new Method\SendSticker($chat_id, $sticker);
    }

    public function sendVideo(int|string $chat_id, CURLFile|string $video): Method\SendVideo
    {
        return new Method\SendVideo($chat_id, $video);
    }

    public function setMyDescription(): Method\SetMyDescription
    {
        return new Method\SetMyDescription;
    }

    public function setMyShortDescription(): Method\SetMyShortDescription
    {
        return new Method\SetMyShortDescription;
    }

    public function setWebhook(string $url): Method\SetWebhook
    {
        return new Method\SetWebhook($url);
    }

    public function WebAppInfo(string $url): Object\WebAppInfo
    {
        return new Object\WebAppInfo($url);
    }
}