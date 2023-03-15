<?php

/**
 * Telegram Bot API 6.6
 */

namespace FSA\Telegram;

class SetMyShortDescription extends AbstractMethod
{
    public string $short_description;
    public string $language_code;

    public function __construct(string $short_description)
    {
        $this->setShortDescription($short_description);
    }

    public function setShortDescription(string $short_description): static
    {
        $this->short_description = $short_description;
        return $this;
    }

    public function setLanguageCode($language_code): static
    {
        $this->language_code = $language_code;
        return $this;
    }
}
