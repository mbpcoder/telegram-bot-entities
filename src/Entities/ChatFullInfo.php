<?php

class  ChatFullInfo
{
    public int $id;
    public string $type;
    public string|null $title;
    public string|null $username;
    public string|null $first_name;
    public string|null $last_name;
    public true|null $is_forum;
    public int $accent_color_id;
    public int $max_reaction_count;
    public ChatPhoto|null $photo;
    /**
     * @var array<string>|null
     */
    public array|null $active_usernames;
    public Birthdate|null $birthdate;
    public BusinessIntro|null $business_intro;
    public BusinessLocation|null $business_location;
    public BusinessOpeningHours|null $business_opening_hours;
    public Chat|null $personal_chat;
    /**
     * @var array<ReactionType>|null
     */
    public array|null $available_reactions;
    public string|null $background_custom_emoji_id;
    public int|null $profile_accent_color_id;
    public string|null $profile_background_custom_emoji_id;
    public string|null $emoji_status_custom_emoji_id;
    public int|null $emoji_status_expiration_date;
    public string|null $bio;
    public true|null $has_private_forwards;
    public true|null $has_restricted_voice_and_video_messages;
    public true|null $join_to_send_messages;
    public true|null $join_by_request;
    public string|null $description;
    public string|null $invite_link;
    public Message|null $pinned_message;
    public ChatPermissions|null $permissions;
    public true|null $can_send_paid_media;
    public int|null $slow_mode_delay;
    public int|null $unrestrict_boost_count;
    public int|null $message_auto_delete_time;
    public true|null $has_aggressive_anti_spam_enabled;
    public true|null $has_hidden_members;
    public true|null $has_protected_content;
    public true|null $has_visible_history;
    public string|null $sticker_set_name;
    public true|null $can_set_sticker_set;
    public string|null $custom_emoji_sticker_set_name;
    public int|null $linked_chat_id;
    public ChatLocation|null $location;
}