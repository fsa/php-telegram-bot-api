<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Method;

use CURLFile;
use FSA\Telegram\Object\MessageEntity;

class SendAudio extends AbstractSendMethod
{
    public CURLFile|string $audio;
    public ?string $caption;
    public ?string $parse_mode;
    /** @var MessageEntity[] */
    public ?array $caption_entities;
    public ?int $duration;
    public ?string $performer;
    public ?string $title;
    public CURLFile|string|null $thumb;

    public function __construct(int|string $chat_id, CURLFile|string $audio)
    {
        $this->setChatId($chat_id);
        $this->setAudio($audio);
    }

    public function setAudio(CURLFile|string $audio): static
    {
        $this->audio = $audio;
        return $this;
    }

    public function setCaption(string $caption): static
    {
        $this->caption = $this->removeHtmlEntities($caption);
        return $this;
    }

    public function setParseMode(string $parse_mode): static
    {
        switch ($parse_mode) {
            case 'Markdown':
                $this->setParseModeMarkdown();
                break;
            default:
                $this->parse_mode = $parse_mode;
        }
        return $this;
    }

    public function setParseModeMarkdown(): static
    {
        $this->parse_mode = 'MarkdownV2';
        return $this;
    }

    public function setParseModeHTML(): static
    {
        $this->parse_mode = 'HTML';
        return $this;
    }

    /**
     * @param MessageEntity[] $caption_entities
     */
    public function setCaptionEntities(array $caption_entities): static
    {
        $this->caption_entities = $caption_entities;
        return $this;
    }

    public function addCaptionEntity(MessageEntity $caption_entity): static
    {
        if (!$this->caption_entities) {
            $this->caption_entities = [$caption_entity];
        } else {
            $this->caption_entities[] = $caption_entity;
        }
        return $this;
    }

    public function setDuration(int $duration): static
    {
        $this->duration = $duration;
        return $this;
    }

    public function setPerformer(string $performer): static
    {
        $this->performer = $this->removeHtmlEntities($performer);
        return $this;
    }

    public function setTitle(string $title): static
    {
        $this->title = $this->removeHtmlEntities($title);
        return $this;
    }

    public function setThumb(CURLFile|string $thumb): static
    {
        $this->thumb = $thumb;
        return $this;
    }
}
