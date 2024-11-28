<?php

class  InlineQueryResultAudio
{
    public string $type;
    public string $id;
    public string $audio_url;
    public string $title;
    public string|null $caption;
    public string|null $parse_mode;
    /**
     * @var array<MessageEntity>|null
     */
    public array|null $caption_entities;
    public string|null $performer;
    public int|null $audio_duration;
    public InlineKeyboardMarkup|null $reply_markup;
    public InputMessageContent|null $input_message_content;
}