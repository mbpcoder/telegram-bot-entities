<?php

class  ChatMemberOwner
{
    public string $status;
    public User $user;
    public bool $is_anonymous;
    public string|null $custom_title;
}