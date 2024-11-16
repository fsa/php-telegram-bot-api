<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class UsersShared
{
    public function __construct(
        public int $request_id,
        /** @var SharedUser[] */
        public array $user_ids,
    ) {}
}
