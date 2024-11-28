<?php

class  BusinessMessagesDeleted
{
    public string $business_connection_id;
    public Chat $chat;
    /**
     * @var array<int>
     */
    public array $message_ids;
}