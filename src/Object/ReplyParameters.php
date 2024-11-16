<?php

namespace FSA\Telegram\Object;

/**
 * Telegram Bot API 7.11
 *
 * @param \FSA\Telegram\Entity\MessageEntity $quote_entities
 */
class ReplyParameters extends AbstractObject
{
    public int $message_id;
    public int|string|null $chat_id;
    public ?bool $allow_sending_without_reply;
    public ?string $quote;
    public ?string $quote_parse_mode;
    /** @var MessageEntity[] */
    public ?array $quote_entities;
    public ?int $quote_position;

    public function __construct(
        int $message_id
    ) {
        $this->message_id = $message_id;
    }

    public function setMessageId(int $message_id): self
    {
        $this->message_id = $message_id;

        return $this;
    }

    public function setChatId(int|string|null $chat_id): self
    {
        $this->chat_id = $chat_id;

        return $this;
    }

    public function setAllowSendingWithoutReply(?bool $allow_sending_without_reply): self
    {
        $this->allow_sending_without_reply = $allow_sending_without_reply;

        return $this;
    }

    public function setQuote(?string $quote): self
    {
        $this->quote = $quote;

        return $this;
    }

    public function setQuoteParseMode(?string $quote_parse_mode): self
    {
        $this->quote_parse_mode = $quote_parse_mode;

        return $this;
    }

    /**
     * @param MessageEntity[]|null $quote_entities
     */
    public function setQuoteEntities(?array $quote_entities): self
    {
        $this->quote_entities = $quote_entities;

        return $this;
    }

    public function setQuotePosition(?int $quote_position): self
    {
        $this->quote_position = $quote_position;

        return $this;
    }
}
