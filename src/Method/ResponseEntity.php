<?php

namespace FSA\Telegram\Method;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
readonly class ResponseEntity
{
    public function __construct(
        public string $classname
    ) {}
}
