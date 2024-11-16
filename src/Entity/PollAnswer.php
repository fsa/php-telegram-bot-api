<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class PollAnswer
{
    public function __construct(
        public string $poll_id,
        public ?Chat $voter_chat,
        public ?User $user,
        /** @var int[] */
        public array $option_ids,
    ) {}
}
