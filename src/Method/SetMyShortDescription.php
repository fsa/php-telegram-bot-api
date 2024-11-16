<?php

/**
 * Telegram Bot API 6.6
 */

namespace FSA\Telegram\Method;

class SetMyShortDescription extends AbstractMethod
{
    public string $short_description;
    public string $language_code;

    public function setShortDescription(string $short_description): static
    {
        $this->short_description = $short_description;
        return $this;
    }

    public function setLanguageCode(string $language_code): static
    {
        $this->language_code = $language_code;
        return $this;
    }
}
