<?php

class  PollOption
{
    public string $text;
    /**
     * @var array<MessageEntity>|null
     */
    public array|null $text_entities;
    public int $voter_count;
}