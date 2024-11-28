<?php

class  StickerSet
{
    public string $name;
    public string $title;
    public string $sticker_type;
    /**
     * @var array<Sticker>
     */
    public array $stickers;
    public PhotoSize|null $thumbnail;
}