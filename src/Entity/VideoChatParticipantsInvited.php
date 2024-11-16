<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class VideoChatParticipantsInvited
{
    public function __construct(
        /** @var User[] */
        public array $users,
    ) {}
}
