<?php

class  InlineQueryResultLocation
{
    public string $type;
    public string $id;
    public float $latitude;
    public float $longitude;
    public string $title;
    public float|null $horizontal_accuracy;
    public int|null $live_period;
    public int|null $heading;
    public int|null $proximity_alert_radius;
    public InlineKeyboardMarkup|null $reply_markup;
    public InputMessageContent|null $input_message_content;
    public string|null $thumbnail_url;
    public int|null $thumbnail_width;
    public int|null $thumbnail_height;
}