<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class EncryptedPassportElement
{
    public function __construct(
        public string $type,
        public ?string $data,
        public ?string $phone_number,
        public string $email,
        /** @var PassportFile[] */
        public ?array $files,
        public ?PassportFile $front_side,
        public ?PassportFile $reverse_side,
        public ?PassportFile $selfie,
        /** @var PassportFile[] */
        public ?array $translation,
        public string $hash,
    ) {}
}
