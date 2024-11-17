<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class InlineKeyboardButton
{
    public function __construct(
        public string $text,
        public ?string $url,
        public ?string $callback_data,
        public ?WebAppInfo $web_app,
        public ?LoginUrl $login_url,
        public ?string $switch_inline_query,
        public ?string $switch_inline_query_current_chat,
        public ?SwitchInlineQueryChosenChat $switch_inline_query_chosen_chat,
        public ?CopyTextButton $copy_text,
        public ?CallbackGame $callback_game,
        public ?bool $pay,
    ) {}
}
