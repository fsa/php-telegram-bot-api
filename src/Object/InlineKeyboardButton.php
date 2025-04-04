<?php

/**
 * Telegram Bot API 6.4
 * Object
 */

namespace FSA\Telegram\Object;

class InlineKeyboardButton extends AbstractObject
{
    public string $text;
    public ?string $url;
    public ?string $callback_data;
    public ?WebAppInfo $web_app;
    public ?LoginUrl $login_url;
    public ?string $switch_inline_query;
    public ?string $switch_inline_query_current_chat;
    public ?CallbackGame $callback_game;
    public ?bool $pay;

    public function __construct(string $text)
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
