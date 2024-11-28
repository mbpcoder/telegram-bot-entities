<?php

class  InlineQueryResultVenue
{
    public string $type;
    public string $id;
    public float $latitude;
    public float $longitude;
    public string $title;
    public string $address;
    public string|null $foursquare_id;
    public string|null $foursquare_type;
    public string|null $google_place_id;
    public string|null $google_place_type;
    public InlineKeyboardMarkup|null $reply_markup;
    public InputMessageContent|null $input_message_content;
    public string|null $thumbnail_url;
    public int|null $thumbnail_width;
    public int|null $thumbnail_height;
}