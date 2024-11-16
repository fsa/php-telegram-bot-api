<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Method;

use FSA\Telegram\Entity\File;

class GetFile extends AbstractMethod
{

    public string $file_id;

    public function __construct(string $file_id)
    {
        $this->setFileId($file_id);
    }

    public function setFileId(string $file_id): self
    {
        $this->file_id = $file_id;

        return $this;
    }

    public function getResponseClassName(): ?string
    {
        return File::class;
    }
}
