<?php

/**
 * Telegram Bot API 7.10
 */

namespace FSA\Telegram\Entity;

readonly class Message
{
    public function __construct(
        public int $message_id,
        public ?int $message_thread_id,
        public ?User $from,
        public ?Chat $sender_chat,
        public ?int $sender_boost_count,
        public ?User $sender_business_bot,
        public int $date,
        public ?string $business_connection_id,
        public Chat $chat,
        public ?MessageOrigin $forward_origin,
        public ?bool $is_topic_message,
        public ?bool $is_automatic_forward,
        public ?Message $reply_to_message,
        public ?ExternalReplyInfo $external_reply,
        public ?TextQuote $quote,
        public ?Story $reply_to_story,
        public ?User $via_bot,
        public ?int $edit_date,
        public ?bool $has_protected_content,
        public ?bool $is_from_offline,
        public ?string $media_group_id,
        public ?string $author_signature,
        public ?string $text,
        /**
         * @Type("array<MessageEntity>")
         */
        public ?array $entities,
        public ?LinkPreviewOptions $link_preview_options,
        public ?string $effect_id,
        public ?Animation $animation,
        public ?Audio $audio,
        public ?Document $document,
        /**
         * @Type("array<PhotoSize>")
         */
        public ?array $photo,
        public ?Sticker $sticker,
        public ?Story $story,
        public ?Video $video,
        public ?VideoNote $video_note,
        public ?Voice $voice,
        public ?string $caption,
        /**
         * @Type("array<MessageEntity>")
         */
        public ?array $caption_entities,
        public ?bool $show_caption_above_media,
        public ?bool $has_media_spoiler,
        public ?Contact $contact,
        public ?Dice $dice,
        public ?Game $game,
        public ?Poll $poll,
        public ?Venue $venue,
        public ?Location $location,
        /**
         * @Type("array<User>")
         */
        public ?array $new_chat_members,
        public ?User $left_chat_member,
        public ?string $new_chat_title,
        /**
         * @Type("array<PhotoSize>")
         */
        public ?array $new_chat_photo,
        public ?bool $delete_chat_photo,
        public ?bool $group_chat_created,
        public ?bool $supergroup_chat_created,
        public ?bool $channel_chat_created,
        public ?MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed,
        public ?int $migrate_to_chat_id,
        public ?int $migrate_from_chat_id,
        /* Поле может содержать InaccessibleMessage,
        частный случай Message (поля chat, message_id, date)
        */
        public ?Message $pinned_message,
        public ?Invoice $invoice,
        public ?SuccessfulPayment $successful_payment,
        public ?RefundedPayment $refunded_payment,
        public ?UsersShared $users_shared,
        public ?ChatShared $chat_shared,
        public ?string $connected_website,
        public ?WriteAccessAllowed $write_access_allowed,
        public ?PassportData $passport_data,
        public ?ProximityAlertTriggered $proximity_alert_triggered,
        public ?ChatBoostAdded $boost_added,
        public ?ChatBackground $chat_background_set,
        public ?ForumTopicCreated $forum_topic_created,
        public ?ForumTopicEdited $forum_topic_edited,
        public ?ForumTopicClosed $forum_topic_closed,
        public ?ForumTopicReopened $forum_topic_reopened,
        public ?GeneralForumTopicHidden $general_forum_topic_hidden,
        public ?GeneralForumTopicUnhidden $general_forum_topic_unhidden,
        public ?GiveawayCreated $giveaway_created,
        public ?Giveaway $giveaway,
        public ?GiveawayWinners $giveaway_winners,
        public ?GiveawayCompleted $giveaway_completed,
        public ?VideoChatScheduled $video_chat_scheduled,
        public ?VideoChatStarted $video_chat_started,
        public ?VideoChatEnded $video_chat_ended,
        public ?VideoChatParticipantsInvited $video_chat_participants_invited,
        public ?WebAppData $web_app_data,
        public ?InlineKeyboardMarkup $reply_markup,

    ) {}
}
