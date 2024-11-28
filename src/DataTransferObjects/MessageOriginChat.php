<?php

class  MessageOriginChat
{
    public string $type;
    public int $date;
    public Chat $sender_chat;
    public string|null $author_signature;
}