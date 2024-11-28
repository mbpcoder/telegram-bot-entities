<?php

class  InputMediaVideo
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
    public bool|null $show_caption_above_media;
    public int|null $width;
    public int|null $height;
    public int|null $duration;
    public bool|null $supports_streaming;
    public bool|null $has_spoiler;
}