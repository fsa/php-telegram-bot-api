<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Method;

use CURLFile;
use FSA\Telegram\Entity\Message;
use FSA\Telegram\Object\MessageEntity;

#[ResponseEntity(Message::class)]
class SendDocument extends AbstractSendMethod
{
    public CURLFile|string $document;
    public CURLFile|string|null $thumbnail;
    public ?string $caption;
    public ?string $parse_mode;
    /** @var MessageEntity[] */
    public ?array $caption_entities;
    public ?bool $disable_content_type_detection;

    public function __construct(int|string $chat_id, CURLFile|string $document)
    {
        $this->setChatId($chat_id);
        $this->setDocument($document);
    }

    public function setDocument(CURLFile|string $document): static
    {
        $this->document = $document;

        return $this;
    }

    public function setThumbnail(CURLFile|string $thumbnail): static
    {
        $this->thumbnail = $thumbnail;

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

    public function setDisableContentTypeDetection(bool $disable_content_type_detection): static
    {
        $this->disable_content_type_detection = $disable_content_type_detection;

        return $this;
    }
}
