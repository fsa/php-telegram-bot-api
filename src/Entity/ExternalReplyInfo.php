<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

readonly class ExternalReplyInfo
{
    public function __construct(
        public MessageOrigin $origin,
        public ?Chat $chat,
        public ?int $message_id,
        public ?LinkPreviewOptions $link_preview_options,
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
        public ?bool $has_media_spoiler,
        public ?Contact $contact,
        public ?Dice $dice,
        public ?Game $game,
        public ?Giveaway $giveaway,
        public ?GiveawayWinners $giveaway_winners,
        public ?Invoice $invoice,
        public ?Location $location,
        public ?Poll $poll,
        public ?Venue $venue,
    ) {}
}
