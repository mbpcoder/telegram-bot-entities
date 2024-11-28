<?php

class  KeyboardButtonRequestChat
{
    public int $request_id;
    public bool $chat_is_channel;
    public bool|null $chat_is_forum;
    public bool|null $chat_has_username;
    public bool|null $chat_is_created;
    public ChatAdministratorRights|null $user_administrator_rights;
    public ChatAdministratorRights|null $bot_administrator_rights;
    public bool|null $bot_is_member;
    public bool|null $request_title;
    public bool|null $request_username;
    public bool|null $request_photo;
}