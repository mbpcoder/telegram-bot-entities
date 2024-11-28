<?php

class  Chat
{
    public int $id;
    public string $type;
    public string|null $title;
    public string|null $username;
    public string|null $first_name;
    public string|null $last_name;
    public true|null $is_forum;
}