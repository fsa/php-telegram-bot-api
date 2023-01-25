<?php

/**
 * Telegram Bot API 6.4
 */

namespace FSA\Telegram;

class SetWebhook extends AbstractMethod
{
    public string $url;
    public $certificate;
    public string $ip_address;
    public int $max_connections;
    public array $allowed_updates;
    public bool $drop_pending_updates;
    public string $secret_token;

    public function __construct(string $url)
    {
        $this->setUrl($url);
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;
        return $this;
    }

    public function setCertificate($certificate): static
    {
        $this->certificate = $certificate;
        return $this;
    }

    public function setIpAddress(string $ip_address): static
    {
        $this->ip_address = $ip_address;
        return $this;
    }

    public function setMaxConnections(int $max_connections): static
    {
        if ($max_connections < 1 or $max_connections > 100) {
            throw new AppException('Max_connections - 1-100');
        }
        $this->max_connections = $max_connections;
        return $this;
    }

    public function setAllowedUpdates(string|array $allowed_updates): static
    {
        $this->allowed_updates = $allowed_updates;
        return $this;
    }

    public function setDropPendingUpdates(bool $drop_pending_updates): static
    {
        $this->drop_pending_updates = $drop_pending_updates;
        return $this;
    }

    public function setSecretToken(string $secret_token)
    {
        $this->secret_token = $secret_token;
        return $this;
    }
}
