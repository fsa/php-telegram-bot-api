<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram;

class GetFile extends AbstractMethod
{

    public $file_id;

    public function __construct(string $file_id)
    {
        $this->setFileId($file_id);
    }

    public function setFileId(string $file_id)
    {
        $this->file_id = $file_id;
        return $this;
    }
}
