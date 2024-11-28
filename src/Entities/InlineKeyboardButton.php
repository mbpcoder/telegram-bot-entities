<?php

class  InlineKeyboardButton
{
    public string $text;
    public string|null $url;
    public string|null $callback_data;
    public WebAppInfo|null $web_app;
    public LoginUrl|null $login_url;
    public string|null $switch_inline_query;
    public string|null $switch_inline_query_current_chat;
    public SwitchInlineQueryChosenChat|null $switch_inline_query_chosen_chat;
    public CopyTextButton|null $copy_text;
    public CallbackGame|null $callback_game;
    public bool|null $pay;
}