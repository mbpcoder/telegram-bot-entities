<?php

class  ExternalReplyInfo
{
    public MessageOrigin $origin;
    public Chat|null $chat;
    public int|null $message_id;
    public LinkPreviewOptions|null $link_preview_options;
    public Animation|null $animation;
    public Audio|null $audio;
    public Document|null $document;
    public PaidMediaInfo|null $paid_media;
    /**
     * @var array<PhotoSize>|null
     */
    public array|null $photo;
    public Sticker|null $sticker;
    public Story|null $story;
    public Video|null $video;
    public VideoNote|null $video_note;
    public Voice|null $voice;
    public true|null $has_media_spoiler;
    public Contact|null $contact;
    public Dice|null $dice;
    public Game|null $game;
    public Giveaway|null $giveaway;
    public GiveawayWinners|null $giveaway_winners;
    public Invoice|null $invoice;
    public Location|null $location;
    public Poll|null $poll;
    public Venue|null $venue;
}