<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class MessageReactionCountUpdated
{
    public Chat $chat;
    public int $message_id;
    public int $date;
    /**
     * @Type("array<ReactionType>")
     */
    public array $reactions;
}
