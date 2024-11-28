<?php

class  InlineQueryResultDocument
{
    public string $type;
    public string $id;
    public string $title;
    public string|null $caption;
    public string|null $parse_mode;
    /**
     * @var array<MessageEntity>|null
     */
    public array|null $caption_entities;
    public string $document_url;
    public string $mime_type;
    public string|null $description;
    public InlineKeyboardMarkup|null $reply_markup;
    public InputMessageContent|null $input_message_content;
    public string|null $thumbnail_url;
    public int|null $thumbnail_width;
    public int|null $thumbnail_height;
}