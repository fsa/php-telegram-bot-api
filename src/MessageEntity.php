<?php

/**
 * Telegram Bot API 6.4
 * Object
 */

namespace FSA\Telegram;

class MessageEntity extends AbstractObject
{
    public $type;
    public $offset;
    public $length;
    public $url;
    public $user;
    public $language;
    public $custom_emoji_id;

    public function __construct($type, $offset, $length)
    {
        $this->setType($type);
        $this->setOffset($offset);
        $this->setLength($length);
    }

    public function setType(string $type): static
    {
        switch ($type) {
            case 'mention':
            case 'hashtag':
            case 'cashtag':
            case 'bot_command':
            case 'url':
            case 'email':
            case 'phone_number':
            case 'bold':
            case 'italic':
            case 'underline':
            case 'strikethrough':
            case 'spoiler':
            case 'code':
            case 'pre':
            case 'text_link':
            case 'text_mention':
            case 'custom_emoji':
                $this->type = $type;
                break;
            default:
                throw new TelegramException('Неверное значение type');
        }
        return $this;
    }

    public function setOffset(int $offset): static
    {
        $this->offset = $offset;
        return $this;
    }

    public function setLength(int $length): static
    {
        $this->length = $length;
        return $this;
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;
        return $this;
    }

    public function setUser(Entity\User $user): static
    {
        $this->user = $user;
        return $this;
    }

    public function setLanguage(LoginUrl $language): static
    {
        $this->language = $language;
        return $this;
    }

    public function setCustomEmojiId(string $custom_emoji_id): static
    {
        $this->custom_emoji_id = $custom_emoji_id;
        return $this;
    }
}
