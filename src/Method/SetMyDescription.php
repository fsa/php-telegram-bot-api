<?php

/**
 * Telegram Bot API 6.6
 */

namespace FSA\Telegram\Method;

class SetMyDescription extends AbstractMethod
{
    public string $description;
    public string $language_code;

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function setLanguageCode($language_code): static
    {
        $this->language_code = $language_code;
        return $this;
    }
}
