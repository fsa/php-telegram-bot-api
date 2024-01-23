<?php

/**
 * Telegram Bot API 7.0
 */

namespace FSA\Telegram\Entity;

class ExternalReplyInfo
{
    public MessageOrigin $origin;
    public ?Chat $chat = null;
    public ?int $message_id = null;
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
    public ?bool $has_media_spoiler = null;
    public ?Contact $contact = null;
    public ?Dice $dice = null;
    public ?Game $game = null;
    public ?Giveaway $giveaway = null;
    public ?GiveawayWinners $giveaway_winners = null;
    public ?Invoice $invoice = null;
    public ?Location $location = null;
    public ?Poll $poll = null;
    public ?Venue $venue = null;
}
