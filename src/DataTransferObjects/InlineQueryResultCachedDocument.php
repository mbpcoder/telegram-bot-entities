<?php

class  InlineQueryResultCachedDocument
{
    public string $type;
    public string $id;
    public string $title;
    public string $document_file_id;
    public string|null $description;
    public string|null $caption;
    public string|null $parse_mode;
    /**
     * @var array<MessageEntity>|null
     */
    public array|null $caption_entities;
    public InlineKeyboardMarkup|null $reply_markup;
    public InputMessageContent|null $input_message_content;
}