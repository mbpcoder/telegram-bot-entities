<?php

class  ChatShared
{
    public int $request_id;
    public int $chat_id;
    public string|null $title;
    public string|null $username;
    /**
     * @var array<PhotoSize>|null
     */
    public array|null $photo;
}