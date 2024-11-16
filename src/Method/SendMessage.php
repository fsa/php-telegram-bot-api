<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Method;

use FSA\Telegram\Entity\Message;
use FSA\Telegram\Object\LinkPreviewOptions;
use FSA\Telegram\Object\MessageEntity;

class SendMessage extends AbstractSendMethod
{
    public string $text;
    public ?string $parse_mode;
    /** @var MessageEntity[] */
    public ?array $entities;
    public ?LinkPreviewOptions $link_preview_options;

    public function __construct(int|string $chat_id, string $text = null, string $parse_mode = null)
    {
        $this->setChatId($chat_id);
        if ($text) {
            $this->setText($text);
        }
        if ($parse_mode) {
            $this->setParseMode($parse_mode);
        }
    }

    public function setText(string $text): static
    {
        $this->text = $this->removeHtmlEntities($text);
        return $this;
    }

    public function appendText(string $text): static
    {
        if (isset($this->text)) {
            $this->text = $this->removeHtmlEntities($text);
        } else {
            $this->text .= $this->removeHtmlEntities($text);
        }
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
     * @param MessageEntity[] $entities
     */
    public function setEntities(array $entities): self
    {
        $this->entities = $entities;

        return $this;
    }

    public function setLinkPreviewOptions(?LinkPreviewOptions $link_preview_options): static
    {
        $this->link_preview_options = $link_preview_options;

        return $this;
    }

    public function setDisableWebPagePreview(): static
    {
        $this->link_preview_options = (new LinkPreviewOptions())->setDisabled();

        return $this;
    }

    public function getResponseClassName(): ?string
    {
        return Message::class;
    }
}
