<?php

class  KeyboardButton
{
    public string $text;
    public KeyboardButtonRequestUsers|null $request_users;
    public KeyboardButtonRequestChat|null $request_chat;
    public bool|null $request_contact;
    public bool|null $request_location;
    public KeyboardButtonPollType|null $request_poll;
    public WebAppInfo|null $web_app;
}