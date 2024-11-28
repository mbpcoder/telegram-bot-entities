<?php

class  InlineQueryResultCachedSticker
{
    public string $type;
    public string $id;
    public string $sticker_file_id;
    public InlineKeyboardMarkup|null $reply_markup;
    public InputMessageContent|null $input_message_content;
}