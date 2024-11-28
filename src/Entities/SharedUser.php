<?php

class  SharedUser
{
    public int $user_id;
    public string|null $first_name;
    public string|null $last_name;
    public string|null $username;
    /**
     * @var array<PhotoSize>|null
     */
    public array|null $photo;
}