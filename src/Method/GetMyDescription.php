<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Method;

use FSA\Telegram\Entity\BotDescription;
use FSA\Telegram\TelegramBotParameterException;

class GetMyDescription extends AbstractMethod
{
    public ?string $language_code;

    public function setLanguageCode(string $language_code): self
    {
        if (strlen($language_code) != 2) {
            throw new TelegramBotParameterException('The language code must contain a two-letter ISO 639-1');
        }
        $this->language_code = $language_code;

        return $this;
    }

    public function getResponseClassName(): ?string
    {
        return BotDescription::class;
    }
}
