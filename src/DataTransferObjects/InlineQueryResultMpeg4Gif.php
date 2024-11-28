<?php

class  InlineQueryResultMpeg4Gif
{
    public string $type;
    public string $id;
    public string $mpeg4_url;
    public int|null $mpeg4_width;
    public int|null $mpeg4_height;
    public int|null $mpeg4_duration;
    public string $thumbnail_url;
    public string|null $thumbnail_mime_type;
    public string|null $title;
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