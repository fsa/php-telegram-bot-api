<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class ChatAdministratorRights
{
    public function __construct(
        public bool $is_anonymous,
        public bool $can_manage_chat,
        public bool $can_delete_messages,
        public bool $can_manage_video_chats,
        public bool $can_restrict_members,
        public bool $can_promote_members,
        public bool $can_change_info,
        public bool $can_invite_users,
        public bool $can_post_messages,
        public ?bool $can_edit_messages,
        public ?bool $can_pin_messages,
        public ?bool $can_post_stories,
        public ?bool $can_edit_stories,
        public ?bool $can_delete_stories,
        public ?bool $can_manage_topics,
    ) {}
}
