<?php

class  InlineQuery
{
    public string $id;
    public User $from;
    public string $query;
    public string $offset;
    public string|null $chat_type;
    public Location|null $location;
}