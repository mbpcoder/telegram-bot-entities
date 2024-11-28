<?php

class  InlineQueryResultCachedPhoto
{
    public string $type;
    public string $id;
    public string $photo_file_id;
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