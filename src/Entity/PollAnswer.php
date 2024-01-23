<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class PollAnswer
{
    public string $poll_id;
    public ?Chat $voter_chat = null;
    public User $user = null;
    public array $option_ids;
}
