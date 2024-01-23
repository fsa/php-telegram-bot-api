<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class Poll
{
    public string $id;
    public string $question;
    /**
     * @Type("array<PollOption>")
     */
    public array $options;
    public int $total_voter_count;
    public bool $is_closed;
    public bool $is_anonymous;
    public string $type;
    public bool $allows_multiple_answers;
    public ?int $correct_option_id = null;
    public ?string $explanation = null;
    /**
     * @Type("array<MessageEntity>")
     */
    public ?array $explanation_entities = null;
    public ?int $open_period = null;
    public ?int $close_date = null;
}
