<?php

/**
 * Telegram Bot API 6.4
 * Object
 */

namespace FSA\Telegram\Object;

class WebAppInfo extends AbstractObject
{

    public string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }
}
