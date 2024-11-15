<?php

/**
 * Telegram Bot API 6.6
 */

namespace FSA\Telegram\Method;

use FSA\Telegram\Entity\BotShortDescription;
use FSA\Telegram\TelegramBotParameterException;

class GetMyShortDescription extends AbstractMethod
{
    public string $language_code;

    public function setLanguageCode(string $language_code)
    {
        if (strlen($language_code) != 2) {
            throw new TelegramBotParameterException('The language code must contain a two-letter ISO 639-1');
        }
        $this->language_code = $language_code;
    }

    public function getResponseClassName(): ?string
    {
        return BotShortDescription::class;
    }
}
