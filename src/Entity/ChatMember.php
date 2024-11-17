<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class ChatMember
{
    public function __construct(
        public string $status, //ChatMemberOwner, ChatMemberAdministrator, ChatMemberMember, ChatMemberRestricted, ChatMemberLeft, ChatMemberBanned
        public User $user, //ChatMemberOwner, ChatMemberAdministrator, ChatMemberMember, ChatMemberRestricted, ChatMemberLeft, ChatMemberBanned
        public ?bool $is_anonymous, //ChatMemberOwner, ChatMemberAdministrator
        public ?string $custom_title, //ChatMemberOwner, ChatMemberAdministrator
        public ?bool $can_be_edited, //ChatMemberAdministrator
        public ?bool $can_manage_chat, //ChatMemberAdministrator
        public ?bool $can_post_messages, //ChatMemberAdministrator
        public ?bool $can_edit_messages, //ChatMemberAdministrator
        public ?bool $can_pin_messages, //ChatMemberAdministrator, ChatMemberRestricted
        public ?bool $can_delete_messages, //ChatMemberAdministrator
        public ?bool $can_manage_video_chats, //ChatMemberAdministrator
        public ?bool $can_restrict_members, //ChatMemberAdministrator
        public ?bool $can_promote_members, //ChatMemberAdministrator
        public ?bool $can_change_info, //ChatMemberAdministrator, ChatMemberRestricted
        public ?bool $can_invite_users, //ChatMemberAdministrator, ChatMemberRestricted
        public ?bool $can_post_stories, //ChatMemberAdministrator
        public ?bool $can_edit_stories, //ChatMemberAdministrator
        public ?bool $can_delete_stories, //ChatMemberAdministrator
        public ?bool $can_manage_topics, //ChatMemberAdministrator, ChatMemberRestricted
        public ?bool $is_member, //ChatMemberRestricted
        public ?bool $can_send_messages, //ChatMemberRestricted
        public ?bool $can_send_audios, //ChatMemberRestricted
        public ?bool $can_send_documents, //ChatMemberRestricted
        public ?bool $can_send_photos, //ChatMemberRestricted
        public ?bool $can_send_videos, //ChatMemberRestricted
        public ?bool $can_send_video_notes, //ChatMemberRestricted
        public ?bool $can_send_voice_notes, //ChatMemberRestricted
        public ?bool $can_send_polls, //ChatMemberRestricted
        public ?bool $can_send_other_messages, //ChatMemberRestricted
        public ?bool $can_add_web_page_previews, //ChatMemberRestricted
        public ?int $until_date, //ChatMemberMember, ChatMemberRestricted, ChatMemberBanned
    ) {}
}
