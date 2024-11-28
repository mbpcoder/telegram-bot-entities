<?php

class  InlineQueryResultArticle
{
    public string $type;
    public string $id;
    public string $title;
    public InputMessageContent $input_message_content;
    public InlineKeyboardMarkup|null $reply_markup;
    public string|null $url;
    public bool|null $hide_url;
    public string|null $description;
    public string|null $thumbnail_url;
    public int|null $thumbnail_width;
    public int|null $thumbnail_height;
}