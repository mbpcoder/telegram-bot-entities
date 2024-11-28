<?php

class  PollAnswer
{
    public string $poll_id;
    public Chat|null $voter_chat;
    public User|null $user;
    /**
     * @var array<int>
     */
    public array $option_ids;
}