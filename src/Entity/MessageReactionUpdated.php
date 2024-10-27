<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class MessageReactionUpdated
{
    public function __construct(
        public Chat $chat,
        public int $message_id,
        public ?User $user,
        public ?Chat $actor_chat,
        public int $date,
        /**
         * @Type("array<ReactionType>")
         */
        public array $old_reaction,
        /**
         * @Type("array<ReactionType>")
         */
        public array $new_reaction,
    ) {}
}
