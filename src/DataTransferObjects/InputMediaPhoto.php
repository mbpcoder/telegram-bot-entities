<?php

class  InputMediaPhoto
{
    public string $type;
    public string $media;
    public string|null $caption;
    public string|null $parse_mode;
    /**
     * @var array<MessageEntity>|null
     */
    public array|null $caption_entities;
    public bool|null $show_caption_above_media;
    public bool|null $has_spoiler;
}