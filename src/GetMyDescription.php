<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram;

class GetMyDescription extends AbstractMethod
{
    public string $language_code;

    public function setLanguageCode(string $language_code)
    {
        if (strlen($language_code) != 2) {
            throw new TelegramBotParameterException('The language code must contain a two-letter ISO 639-1');
        }
        $this->language_code = $language_code;
    }
}
