<?php

class  InlineQueryResultContact
{
    public string $type;
    public string $id;
    public string $phone_number;
    public string $first_name;
    public string|null $last_name;
    public string|null $vcard;
    public InlineKeyboardMarkup|null $reply_markup;
    public InputMessageContent|null $input_message_content;
    public string|null $thumbnail_url;
    public int|null $thumbnail_width;
    public int|null $thumbnail_height;
}