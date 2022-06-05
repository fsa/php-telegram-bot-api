<?php

/**
 * Telegram Bot API 6.0
 */

namespace FSA\Telegram;

class SendMessage extends SendAbstract
{
    public $text;
    public $parse_mode;
    public $entities;
    public $disable_web_page_preview;

    public function __construct(string $chat_id = null, string $text = null, string $parseMode = null)
    {
        if (!is_null($chat_id)) {
            $this->setChatId($chat_id);
        }
        if (!is_null($text)) {
            $this->setText($text);
        }
        switch ($parseMode) {
            case 'HTML':
                $this->setParseModeHTML();
                break;
            case 'Markdown':
            case 'MarkdownV2':
                $this->setParseModeMarkdown();
                break;
            default:
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

    private function removeHtmlEntities(string $text)
    {
        return str_replace(['&nbsp;', '&laquo;', '&raquo;', '&quot;', '&deg;'], [' ', '«', '»', '"', '°'], $text);
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

    public function setParseMode(string $parse_mode): static
    {
        $this->parse_mode = $parse_mode;
        return $this;
    }

    // public function setEntities(array|MessageEntity $entity) {}

    public function setDisableWebPagePreview(bool $bool = true): static
    {
        $this->disable_web_page_preview = $bool;
        return $this;
    }

    public function buildQuery(): array
    {
        if (is_null($this->chat_id) or is_null($this->text)) {
            throw new AppException('Required: chat_id, text');
        }
        return parent::buildQuery();
    }
}
