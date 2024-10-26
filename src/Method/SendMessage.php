<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram\Method;

use FSA\Telegram\Entity\Message;

class SendMessage extends AbstractSendMethod
{
    public $text;
    public $parse_mode;
    public $entities;
    public $disable_web_page_preview;

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
        if (is_null($this->text)) {
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

    // public function setEntities(array|MessageEntity $entity) {}

    public function setDisableWebPagePreview(bool $disable_web_page_preview = true): static
    {
        $this->disable_web_page_preview = $disable_web_page_preview;
        return $this;
    }

    public function getResponseClassName(): ?string
    {
        return Message::class;
    }
}
