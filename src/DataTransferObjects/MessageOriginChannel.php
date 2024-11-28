<?php

class  MessageOriginChannel
{
    public string $type;
    public int $date;
    public Chat $chat;
    public int $message_id;
    public string|null $author_signature;
}