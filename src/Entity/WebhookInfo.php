<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class WebhookInfo
{
    public function __construct(
        public ?string $url,
        public ?bool $has_custom_certificate,
        public ?int $pending_update_count,
        public ?string $ip_address,
        public ?int $last_error_date,
        public ?string $last_error_message,
        public ?int $last_synchronization_error_date,
        public ?int $max_connections,
        /** @var string[] */
        public ?array $allowed_updates,
    ) {}
}
