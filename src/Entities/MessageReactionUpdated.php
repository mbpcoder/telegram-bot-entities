<?php

class  MessageReactionUpdated
{
    public Chat $chat;
    public int $message_id;
    public User|null $user;
    public Chat|null $actor_chat;
    public int $date;
    /**
     * @var array<ReactionType>
     */
    public array $old_reaction;
    /**
     * @var array<ReactionType>
     */
    public array $new_reaction;
}