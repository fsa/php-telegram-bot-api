<?php

/**
 * Telegram Bot API 8.0
 */

namespace FSA\Telegram\Entity;

readonly class Update
{
    public function __construct(
        public int $update_id,
        public ?Message $message,
        public ?Message $edited_message,
        public ?Message $channel_post,
        public ?Message $edited_channel_post,
        public ?BusinessConnection $business_connection,
        public ?Message $business_message,
        public ?Message $edited_business_message,
        public ?BusinessMessagesDeleted $deleted_business_messages,
        public ?MessageReactionUpdated $message_reaction,
        public ?MessageReactionCountUpdated $message_reaction_count,
        public ?InlineQuery $inline_query,
        public ?ChosenInlineResult $chosen_inline_result,
        public ?CallbackQuery $callback_query,
        public ?ShippingQuery $shipping_query,
        public ?PreCheckoutQuery $pre_checkout_query,
        public ?PaidMediaPurchased $purchased_paid_media,
        public ?Poll $poll,
        public ?PollAnswer $poll_answer,
        public ?ChatMemberUpdated $my_chat_member,
        public ?ChatMemberUpdated $chat_member,
        public ?ChatJoinRequest $chat_join_request,
        public ?ChatBoostUpdated $chat_boost,
        public ?ChatBoostRemoved $removed_chat_boost,
    ) {}
}
