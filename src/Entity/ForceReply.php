<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Entity;

class ForceReply
{
    public bool $force_reply;
    public ?string $input_field_placeholder;
    public ?bool $selective = null;
}
