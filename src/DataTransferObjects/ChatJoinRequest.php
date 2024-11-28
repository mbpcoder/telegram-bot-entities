<?php

class  ChatJoinRequest
{
    public Chat $chat;
    public User $from;
    public int $user_chat_id;
    public int $date;
    public string|null $bio;
    public ChatInviteLink|null $invite_link;
}