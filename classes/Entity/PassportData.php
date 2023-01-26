<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class PassportData extends AbstractEntity
{

    public array $data;
    public ?EncryptedCredentials $credentials;
}
