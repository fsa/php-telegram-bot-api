<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class Chat
{
    public function __construct(
        public int $id,
        public string $type,
        public ?string $title,
        public ?string $username,
        public ?string $first_name,
        public ?string $last_name,
        public ?bool $is_forum,
        public ?ChatPhoto $photo,
        /** @var string[] */
        public ?array $active_usernames,
        /** @var ReactionType[] */
        public ?array $available_reactions,
        public ?int $accent_color_id,
        public ?string $background_custom_emoji_id,
        public ?int $profile_accent_color_id,
        public ?string $profile_background_custom_emoji_id,
        public ?string $emoji_status_custom_emoji_id,
        public ?int $emoji_status_expiration_date,
        public ?string $bio,
        public ?bool $has_private_forwards,
        public ?bool $has_restricted_voice_and_video_messages,
        public ?bool $join_to_send_messages,
        public ?bool $join_by_request,
        public ?string $description,
        public ?string $invite_link,
        public ?Message $pinned_message,
        public ?ChatPermissions $permissions,
        public ?int $slow_mode_delay,
        public ?int $message_auto_delete_time,
        public ?bool $has_aggressive_anti_spam_enabled,
        public ?bool $has_hidden_members,
        public ?bool $has_protected_content,
        public ?bool $has_visible_history,
        public ?string $sticker_set_name,
        public ?bool $can_set_sticker_set,
        public ?int $linked_chat_id,
        public ?ChatLocation $location,

    ) {}
}
