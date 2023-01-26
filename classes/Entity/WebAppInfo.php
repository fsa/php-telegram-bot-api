<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class WebAppInfo extends AbstractEntity {

    public string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

}
