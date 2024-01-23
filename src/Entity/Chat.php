<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class Chat
{
    public int $id;
    public string $type;
    public ?string $title = null;
    public ?string $username = null;
    public ?string $first_name = null;
    public ?string $last_name = null;
    public ?bool $is_forum = null;
    public ?ChatPhoto $photo = null;
    public ?array $active_usernames = null;
    /**
     * @Type("array<ReactionType>")
     */
    public ?array $available_reactions = null;
    public ?int $accent_color_id = null;
    public ?string $background_custom_emoji_id = null;
    public ?int $profile_accent_color_id = null;
    public ?string $profile_background_custom_emoji_id = null;
    public ?string $emoji_status_custom_emoji_id = null;
    public ?int $emoji_status_expiration_date = null;
    public ?string $bio = null;
    public ?bool $has_private_forwards = null;
    public ?bool $has_restricted_voice_and_video_messages = null;
    public ?bool $join_to_send_messages = null;
    public ?bool $join_by_request = null;
    public ?string $description = null;
    public ?string $invite_link = null;
    public ?Message $pinned_message = null;
    public ?ChatPermissions $permissions = null;
    public ?int $slow_mode_delay = null;
    public ?int $message_auto_delete_time = null;
    public ?bool $has_aggressive_anti_spam_enabled = null;
    public ?bool $has_hidden_members = null;
    public ?bool $has_protected_content = null;
    public ?bool $has_visible_history = null;
    public ?string $sticker_set_name = null;
    public ?bool $can_set_sticker_set = null;
    public ?int $linked_chat_id = null;
    public ?ChatLocation $location = null;
}
