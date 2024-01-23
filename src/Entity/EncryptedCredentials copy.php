<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class EncryptedPassportElement
{
    public string $type;
    public ?string $data;
    public ?string $phone_number;
    public string $email;
    /**
     * @Type("array<PassportFile>")
     */
    public ?array $files;
    public ?PassportFile $front_side;
    public ?PassportFile $reverse_side;
    public ?PassportFile $selfie;
    /**
     * @Type("array<PassportFile>")
     */    
    public ?array $translation;
    public string $hash;
}
