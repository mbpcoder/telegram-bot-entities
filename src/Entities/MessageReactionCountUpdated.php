<?php

class  MessageReactionCountUpdated
{
    public Chat $chat;
    public int $message_id;
    public int $date;
    /**
     * @var array<ReactionCount>
     */
    public array $reactions;
}