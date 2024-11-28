<?php

class  InputSticker
{
    public InputFile|string $sticker;
    public string $format;
    /**
     * @var array<string>
     */
    public array $emoji_list;
    public MaskPosition|null $mask_position;
    /**
     * @var array<string>|null
     */
    public array|null $keywords;
}