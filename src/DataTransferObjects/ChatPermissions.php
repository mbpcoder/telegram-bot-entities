<?php

class  ChatPermissions
{
    public bool|null $can_send_messages;
    public bool|null $can_send_audios;
    public bool|null $can_send_documents;
    public bool|null $can_send_photos;
    public bool|null $can_send_videos;
    public bool|null $can_send_video_notes;
    public bool|null $can_send_voice_notes;
    public bool|null $can_send_polls;
    public bool|null $can_send_other_messages;
    public bool|null $can_add_web_page_previews;
    public bool|null $can_change_info;
    public bool|null $can_invite_users;
    public bool|null $can_pin_messages;
    public bool|null $can_manage_topics;
}