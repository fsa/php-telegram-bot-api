<?php

/**
 * Telegram Bot API 5.0
 */

namespace FSA\Telegram\Entity;

class WebhookInfo
{
    public string $url;
    public bool $has_custom_certificate;
    public int $pending_update_count;
    public ?string $ip_address = null;
    public ?int $last_error_date = null;
    public ?string $last_error_message = null;
    public ?int $max_connections = null;
    public ?array $allowed_updates = null;
}
