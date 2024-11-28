<?php

class  InputPaidMediaVideo
{
    public string $type;
    public string $media;
    public InputFile|string|null $thumbnail;
    public int|null $width;
    public int|null $height;
    public int|null $duration;
    public bool|null $supports_streaming;
}