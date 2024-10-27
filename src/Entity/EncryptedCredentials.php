<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class EncryptedCredentials
{
    public function __construct(
        public string $data,
        public string $hash,
        public string $secret,
    ) {}
}
