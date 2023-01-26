<?php

/**
 * Telegram Bot API 6.4
 * Object
 */

namespace FSA\Telegram;

class WebAppInfo
{

    public string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }
}
