<?php

class  MessageEntity
{
    public string $type;
    public int $offset;
    public int $length;
    public string|null $url;
    public User|null $user;
    public string|null $language;
    public string|null $custom_emoji_id;
}