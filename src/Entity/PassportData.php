<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class PassportData
{
    public function __construct(
        /** @var EncryptedPassportElement[] */
        public array $data,
        public ?EncryptedCredentials $credentials,
    ) {}
}
