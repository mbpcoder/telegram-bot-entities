<?php

class  InlineQueryResultPhoto
{
    public string $type;
    public string $id;
    public string $photo_url;
    public string $thumbnail_url;
    public int|null $photo_width;
    public int|null $photo_height;
    public string|null $title;
    public string|null $description;
    public string|null $caption;
    public string|null $parse_mode;
    /**
     * @var array<MessageEntity>|null
     */
    public array|null $caption_entities;
    public bool|null $show_caption_above_media;
    public InlineKeyboardMarkup|null $reply_markup;
    public InputMessageContent|null $input_message_content;
}