<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class Message
{
    public int $message_id;
    public ?int $message_thread_id;
    public ?User $from = null;
    public ?Chat $sender_chat = null;
    public int $date;
    public Chat $chat;
    public ?MessageOrigin $forward_origin = null;
    public ?bool $is_topic_message = null;
    public ?bool $is_automatic_forward = null;
    public ?Message $reply_to_message = null;
    public ?ExternalReplyInfo $external_reply = null;
    public ?TextQuote $quote = null;
    public ?User $via_bot = null;
    public ?int $edit_date = null;
    public ?bool $has_protected_content = null;
    public ?string $media_group_id = null;
    public ?string $author_signature = null;
    public ?string $text = null;
    /**
     * @Type("array<MessageEntity>")
     */
    public ?array $entities = null;
    public ?LinkPreviewOptions $link_preview_options = null;
    public ?Animation $animation = null;
    public ?Audio $audio = null;
    public ?Document $document = null;
    /**
     * @Type("array<PhotoSize>")
     */
    public ?array $photo = null;
    public ?Sticker $sticker = null;
    public ?Story $story = null;
    public ?Video $video = null;
    public ?VideoNote $video_note = null;
    public ?Voice $voice = null;
    public ?string $caption = null;
    /**
     * @Type("array<MessageEntity>")
     */
    public ?array $caption_entities = null;
    public ?bool $has_media_spoiler = null;
    public ?Contact $contact = null;
    public ?Dice $dice = null;
    public ?Game $game = null;
    public ?Poll $poll = null;
    public ?Venue $venue = null;
    public ?Location $location = null;
    /**
     * @Type("array<User>")
     */
    public ?array $new_chat_members = null;
    public ?User $left_chat_member = null;
    public ?string $new_chat_title = null;
    /**
     * @Type("array<PhotoSize>")
     */
    public ?array $new_chat_photo = null;
    public ?bool $delete_chat_photo = null;
    public ?bool $group_chat_created = null;
    public ?bool $supergroup_chat_created = null;
    public ?bool $channel_chat_created = null;
    public ?MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed = null;
    public ?int $migrate_to_chat_id = null;
    public ?int $migrate_from_chat_id = null;
    #TODO: MaybeInaccessibleMessage = Message|InaccessibleMessage
    public ?Message $pinned_message = null;
    public ?Invoice $invoice = null;
    public ?SuccessfulPayment $successful_payment = null;
    public ?UsersShared $users_shared = null;
    public ?ChatShared $chat_shared = null;
    public ?string $connected_website = null;
    public ?WriteAccessAllowed $write_access_allowed = null;
    public ?PassportData $passport_data = null;
    public ?ProximityAlertTriggered $proximity_alert_triggered = null;
    public ?ForumTopicCreated $forum_topic_created = null;
    public ?ForumTopicEdited $forum_topic_edited = null;
    public ?ForumTopicClosed $forum_topic_closed = null;
    public ?ForumTopicReopened $forum_topic_reopened = null;
    public ?GeneralForumTopicHidden $general_forum_topic_hidden = null;
    public ?GeneralForumTopicUnhidden $general_forum_topic_unhidden = null;
    public ?GiveawayCreated $giveaway_created = null;
    public ?Giveaway $giveaway = null;
    public ?GiveawayWinners $giveaway_winners = null;
    public ?GiveawayCompleted $giveaway_completed = null;
    public ?VideoChatScheduled $video_chat_scheduled = null;
    public ?VideoChatStarted $video_chat_started = null;
    public ?VideoChatEnded $video_chat_ended = null;
    public ?VideoChatParticipantsInvited $video_chat_participants_invited = null;
    public ?WebAppData $web_app_data = null;
    public ?InlineKeyboardMarkup $reply_markup = null;
}
