<?php

/**
 * Telegram Bot API 6.6
 */

namespace FSA\Telegram;

class GetMyShortDescription extends AbstractMethod
{
    public string $language_code;

    public function __construct(string $language_code)
    {
        $this->setLanguageCode($language_code);
    }

    public function setLanguageCode(string $language_code)
    {
        if (strlen($language_code) != 2) {
            throw new AppException('The language code must contain a two-letter ISO 639-1');
        }
        $this->language_code = $language_code;
    }
}
