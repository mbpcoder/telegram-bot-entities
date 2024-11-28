<?php

class  Message
{
    public int $message_id;
    public int|null $message_thread_id;
    public User|null $from;
    public Chat|null $sender_chat;
    public int|null $sender_boost_count;
    public User|null $sender_business_bot;
    public int $date;
    public string|null $business_connection_id;
    public Chat $chat;
    public MessageOrigin|null $forward_origin;
    public true|null $is_topic_message;
    public true|null $is_automatic_forward;
    public Message|null $reply_to_message;
    public ExternalReplyInfo|null $external_reply;
    public TextQuote|null $quote;
    public Story|null $reply_to_story;
    public User|null $via_bot;
    public int|null $edit_date;
    public true|null $has_protected_content;
    public true|null $is_from_offline;
    public string|null $media_group_id;
    public string|null $author_signature;
    public string|null $text;
    /**
     * @var array<MessageEntity>|null
     */
    public array|null $entities;
    public LinkPreviewOptions|null $link_preview_options;
    public string|null $effect_id;
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
    public string|null $caption;
    /**
     * @var array<MessageEntity>|null
     */
    public array|null $caption_entities;
    public true|null $show_caption_above_media;
    public true|null $has_media_spoiler;
    public Contact|null $contact;
    public Dice|null $dice;
    public Game|null $game;
    public Poll|null $poll;
    public Venue|null $venue;
    public Location|null $location;
    /**
     * @var array<User>|null
     */
    public array|null $new_chat_members;
    public User|null $left_chat_member;
    public string|null $new_chat_title;
    /**
     * @var array<PhotoSize>|null
     */
    public array|null $new_chat_photo;
    public true|null $delete_chat_photo;
    public true|null $group_chat_created;
    public true|null $supergroup_chat_created;
    public true|null $channel_chat_created;
    public MessageAutoDeleteTimerChanged|null $message_auto_delete_timer_changed;
    public int|null $migrate_to_chat_id;
    public int|null $migrate_from_chat_id;
    public MaybeInaccessibleMessage|null $pinned_message;
    public Invoice|null $invoice;
    public SuccessfulPayment|null $successful_payment;
    public RefundedPayment|null $refunded_payment;
    public UsersShared|null $users_shared;
    public ChatShared|null $chat_shared;
    public string|null $connected_website;
    public WriteAccessAllowed|null $write_access_allowed;
    public PassportData|null $passport_data;
    public ProximityAlertTriggered|null $proximity_alert_triggered;
    public ChatBoostAdded|null $boost_added;
    public ChatBackground|null $chat_background_set;
    public ForumTopicCreated|null $forum_topic_created;
    public ForumTopicEdited|null $forum_topic_edited;
    public ForumTopicClosed|null $forum_topic_closed;
    public ForumTopicReopened|null $forum_topic_reopened;
    public GeneralForumTopicHidden|null $general_forum_topic_hidden;
    public GeneralForumTopicUnhidden|null $general_forum_topic_unhidden;
    public GiveawayCreated|null $giveaway_created;
    public Giveaway|null $giveaway;
    public GiveawayWinners|null $giveaway_winners;
    public GiveawayCompleted|null $giveaway_completed;
    public VideoChatScheduled|null $video_chat_scheduled;
    public VideoChatStarted|null $video_chat_started;
    public VideoChatEnded|null $video_chat_ended;
    public VideoChatParticipantsInvited|null $video_chat_participants_invited;
    public WebAppData|null $web_app_data;
    public InlineKeyboardMarkup|null $reply_markup;
}