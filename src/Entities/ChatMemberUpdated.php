<?php

class  ChatMemberUpdated
{
    public Chat $chat;
    public User $from;
    public int $date;
    public ChatMember $old_chat_member;
    public ChatMember $new_chat_member;
    public ChatInviteLink|null $invite_link;
    public bool|null $via_join_request;
    public bool|null $via_chat_folder_invite_link;
}