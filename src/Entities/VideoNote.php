<?php

class  VideoNote
{
    public string $file_id;
    public string $file_unique_id;
    public int $length;
    public int $duration;
    public PhotoSize|null $thumbnail;
    public int|null $file_size;
}