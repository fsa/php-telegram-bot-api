<?php

/**
 * Telegram Bot API 5.0
 */

namespace FSA\Telegram\Entity;

class PollAnswer extends AbstractEntity {

    public string $poll_id;
    public User $user;
    public array $option_ids;

}
