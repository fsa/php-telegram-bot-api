<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Method;

use FSA\Telegram\Entity\User;

#[ResponseEntity(User::class)]
class GetMe extends AbstractMethod {}
