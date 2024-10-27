<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class Poll
{
    public function __construct(
        public string $id,
        public string $question,
        /**
         * @Type("array<PollOption>")
         */
        public array $options,
        public int $total_voter_count,
        public bool $is_closed,
        public bool $is_anonymous,
        public string $type,
        public bool $allows_multiple_answers,
        public ?int $correct_option_id,
        public ?string $explanation,
        /**
         * @Type("array<MessageEntity>")
         */
        public ?array $explanation_entities,
        public ?int $open_period,
        public ?int $close_date,
    ) {}
}
