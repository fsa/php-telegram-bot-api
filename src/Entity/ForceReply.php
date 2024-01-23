<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class ForceReply
{
    public bool $force_reply;
    public ?string $input_field_placeholder = null;
    public ?bool $selective = null;
}
