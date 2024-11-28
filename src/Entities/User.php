<?php

class  User
{
    public int $id;
    public bool $is_bot;
    public string $first_name;
    public string|null $last_name;
    public string|null $username;
    public string|null $language_code;
    public true|null $is_premium;
    public true|null $added_to_attachment_menu;
    public bool|null $can_join_groups;
    public bool|null $can_read_all_group_messages;
    public bool|null $supports_inline_queries;
    public bool|null $can_connect_to_business;
    public bool|null $has_main_web_app;
}