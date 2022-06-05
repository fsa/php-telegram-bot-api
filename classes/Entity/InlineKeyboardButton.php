<?php

/**
 * Telegram Bot API 6.0
 */

namespace FSA\Telegram\Entity;

class InlineKeyboardButton extends AbstractEntity
{
    public $text;
    public $url;
    public $callback_data;
    public $web_app;
    public $login_url;
    public $switch_inline_query;
    public $switch_inline_query_current_chat;
    public $callback_game;
    public $pay;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;
        return $this;
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;
        return $this;
    }

    public function setCallbackData(string $callback_data): static
    {
        $this->callback_data = $callback_data;
        return $this;
    }

    public function setWebApp(WebAppInfo $web_app): static
    {
        $this->web_app = $web_app;
        return $this;
    }

    public function setLoginUrl(LoginUrl $login_url): static
    {
        $this->login_url = $login_url;
        return $this;
    }

    public function setSwitchInlineQuery(string $switch_inline_query): static
    {
        $this->switch_inline_query = $switch_inline_query;
        return $this;
    }

    public function setSwitchInlineQueryCurrentChat(string $switch_inline_query_current_chat): static
    {
        $this->switch_inline_query_current_chat = $switch_inline_query_current_chat;
        return $this;
    }

    public function setCallbackGame(CallbackGame $callback_game): static
    {
        $this->callback_game = $callback_game;
        return $this;
    }

    public function setPay(bool $pay = true): static
    {
        $this->pay = $pay;
        return $this;
    }
}
