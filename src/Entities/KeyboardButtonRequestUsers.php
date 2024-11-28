<?php

class  KeyboardButtonRequestUsers
{
    public int $request_id;
    public bool|null $user_is_bot;
    public bool|null $user_is_premium;
    public int|null $max_quantity;
    public bool|null $request_name;
    public bool|null $request_username;
    public bool|null $request_photo;
}