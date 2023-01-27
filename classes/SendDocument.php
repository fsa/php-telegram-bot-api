<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram;

use CURLFile;

class SendDocument extends AbstractSendMethod
{
    public $document;
    public $thumb;
    public $caption;
    public $parse_mode;
    public $caption_entities;
    public $disable_content_type_detection;

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

    public function setThumb(CURLFile|string $thumb): static
    {
        $this->thumb = $thumb;
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

    //TODO: setCaptionEntities

    public function setDisableContentTypeDetection(bool $disable_content_type_detection): static
    {
        $this->disable_content_type_detection = $disable_content_type_detection;
        return $this;
    }
}
