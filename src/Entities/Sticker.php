<?php

class  Sticker
{
    public string $file_id;
    public string $file_unique_id;
    public string $type;
    public int $width;
    public int $height;
    public bool $is_animated;
    public bool $is_video;
    public PhotoSize|null $thumbnail;
    public string|null $emoji;
    public string|null $set_name;
    public File|null $premium_animation;
    public MaskPosition|null $mask_position;
    public string|null $custom_emoji_id;
    public true|null $needs_repainting;
    public int|null $file_size;
}