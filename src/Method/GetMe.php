<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Method;

use FSA\Telegram\Entity\User;

class GetMe extends AbstractMethod {

    public function getResponseClassName(): ?string
    {
        return User::class;
    }
}
