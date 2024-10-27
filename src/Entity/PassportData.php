<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

readonly class PassportData
{
    public function __construct(
        /**
         * @Type("array<EncryptedPassportElement>")
         */
        public array $data,
        public ?EncryptedCredentials $credentials,
    ) {}
}
