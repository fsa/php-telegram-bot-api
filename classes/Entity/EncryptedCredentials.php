<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class EncryptedCredentials extends AbstractEntity
{

    public string $data;
    public string $hash;
    public string $secret;
}
