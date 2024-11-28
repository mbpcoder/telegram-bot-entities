<?php

class  ReplyKeyboardMarkup
{
    /**
     * @var array<array<KeyboardButton>>
     */
    public array $keyboard;
    public bool|null $is_persistent;
    public bool|null $resize_keyboard;
    public bool|null $one_time_keyboard;
    public string|null $input_field_placeholder;
    public bool|null $selective;
}