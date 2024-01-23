<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class ChatMember
{
    //TODO: Разные типы пользователей
    public string $status;
    public User $user;
    public ?bool $is_anonymous;
    public ?string $custom_title;
    public ?bool $can_be_edited;
    public ?bool $can_manage_chat;
    public ?bool $can_post_messages;
    public ?bool $can_edit_messages;
    public ?bool $can_delete_messages;
    public ?bool $can_manage_video_chats;
    public ?bool $can_restrict_members;
    public ?bool $can_promote_members;
    public ?bool $can_change_info;
    public ?bool $can_invite_users;
    public ?bool $can_pin_messages;
    public ?bool $can_post_stories;
    public ?bool $can_edit_stories;
    public ?bool $can_delete_stories;
    public ?bool $can_manage_topics;
    public ?bool $is_member;
    public ?bool $can_send_messages;
    public ?bool $can_send_audios;
    public ?bool $can_send_documents;
    public ?bool $can_send_photos;
    public ?bool $can_send_videos;
    public ?bool $can_send_video_notes;
    public ?bool $can_send_voice_notes;
    public ?bool $can_send_polls;
    public ?bool $can_send_other_messages;
    public ?bool $can_add_web_page_previews;
    public ?int $until_date;
}
