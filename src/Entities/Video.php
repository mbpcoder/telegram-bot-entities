<?php

class  Video
{
    public string $file_id;
    public string $file_unique_id;
    public int $width;
    public int $height;
    public int $duration;
    public PhotoSize|null $thumbnail;
    public string|null $file_name;
    public string|null $mime_type;
    public int|null $file_size;
}