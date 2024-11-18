<?php

/**
 * Telegram Bot API 8.0
 * Object
 */

namespace FSA\Telegram\Object;

abstract class InputPaidMedia extends AbstractObject
{
    public function __construct(
        public string $type,
        public string $media,
    ) {}
}
