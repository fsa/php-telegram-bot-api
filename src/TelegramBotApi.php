<?php

namespace FSA\Telegram;

use CURLFile;

class TelegramBotApi
{
    public function deleteWebhook(): DeleteWebhook
    {
        return new DeleteWebhook;
    }

    public function forceReply(bool $force_reply = true): ForceReply
    {
        return new ForceReply($force_reply);
    }

    public function forwardMessage(int|string $chat_id, int|string $from_chat_id, int $message_id): ForwardMessage
    {
        return new ForwardMessage($chat_id, $from_chat_id, $message_id);
    }

    public function getFile(string $file_id): GetFile
    {
        return new GetFile($file_id);
    }

    public function getMe(): GetMe
    {
        return new GetMe;
    }

    public function getMyDescription(): GetMyDescription
    {
        return new GetMyDescription;
    }

    public function getMyShortDescription(): GetMyShortDescription
    {
        return new GetMyShortDescription;
    }

    public function getUpdates(): GetUpdates
    {
        return new GetUpdates;
    }

    public function getWebhookInfo(): GetWebhookInfo
    {
        return new GetWebhookInfo;
    }

    public function InlineKeyboardButton(string $text): InlineKeyboardButton
    {
        return new InlineKeyboardButton($text);
    }

    public function InlineKeyboardMarkup(array $buttons = null): InlineKeyboardMarkup
    {
        return new InlineKeyboardMarkup($buttons);
    }

    public function KeyboardButton(string $text): KeyboardButton
    {
        return new KeyboardButton($text);
    }

    public function KeyboardButtonPoolType(): KeyboardButtonPollType
    {
        return new KeyboardButtonPollType;
    }

    public function LoginUrl(string $url): LoginUrl
    {
        return new LoginUrl($url);
    }

    public function MessageEntity($type, $offset, $length): MessageEntity
    {
        return new MessageEntity($type, $offset, $length);
    }

    public function ReplyKeyboardMarkup(): ReplyKeyboardMarkup
    {
        return new ReplyKeyboardMarkup;
    }

    public function ReplyKeyboardRemove(bool $selective = null): ReplyKeyboardRemove
    {
        return new ReplyKeyboardRemove($selective);
    }

    public function sendAnimation(int|string $chat_id, CURLFile|string $animation): SendAnimation
    {
        return new SendAnimation($chat_id, $animation);
    }

    public function sendAudio(int|string $chat_id, CURLFile|string $audio): SendAudio
    {
        return new SendAudio($chat_id, $audio);
    }

    public function sendDice(int|string $chat_id, int|string $emoji): SendDice
    {
        return new SendDice($chat_id, $emoji);
    }

    public function sendDocument(int|string $chat_id, CURLFile|string $document): SendDocument
    {
        return new SendDocument($chat_id, $document);
    }

    public function sendLocation(int|string $chat_id, float $latitude, float $longitude): SendLocation
    {
        return new SendLocation($chat_id, $latitude, $longitude);
    }

    public function sendMessage(int|string $chat_id, string $text = null, string $parse_mode = null): SendMessage
    {
        return new SendMessage($chat_id, $text, $parse_mode);
    }

    public function sendPhoto(int|string $chat_id, CURLFile|string $photo): SendPhoto
    {
        return new SendPhoto($chat_id, $photo);
    }

    public function sendSticker(string $chat_id, string $sticker): SendSticker
    {
        return new SendSticker($chat_id, $sticker);
    }

    public function sendVideo(int|string $chat_id, CURLFile|string $video): SendVideo
    {
        return new SendVideo($chat_id, $video);
    }

    public function setMyDescription(): SetMyDescription
    {
        return new SetMyDescription;
    }

    public function setMyShortDescription(): SetMyShortDescription
    {
        return new SetMyShortDescription;
    }

    public function setWebhook(string $url): SetWebhook
    {
        return new SetWebhook($url);
    }

    public function WebAppInfo(string $url): WebAppInfo
    {
        return new WebAppInfo($url);
    }
}