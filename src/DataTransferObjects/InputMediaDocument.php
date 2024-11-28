<?php

class  InputMediaDocument
{
    public string $type;
    public string $media;
    public InputFile|string|null $thumbnail;
    public string|null $caption;
    public string|null $parse_mode;
    /**
     * @var array<MessageEntity>|null
     */
    public array|null $caption_entities;
    public bool|null $disable_content_type_detection;
}