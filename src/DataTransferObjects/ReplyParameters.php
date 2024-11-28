<?php

class  ReplyParameters
{
    public int $message_id;
    public int|string|null $chat_id;
    public bool|null $allow_sending_without_reply;
    public string|null $quote;
    public string|null $quote_parse_mode;
    /**
     * @var array<MessageEntity>|null
     */
    public array|null $quote_entities;
    public int|null $quote_position;
}