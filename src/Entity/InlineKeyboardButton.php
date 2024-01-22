<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class InlineKeyboardButton
{
    public string $text;
    public ?string $url;
    public ?string $callback_data;
    public ?WebAppInfo $web_app;
    public ?LoginUrl $login_url;
    public ?string $switch_inline_query;
    public ?string $switch_inline_query_current_chat;
    public ?mixed $callback_game;
    public ?bool $pay;
}
