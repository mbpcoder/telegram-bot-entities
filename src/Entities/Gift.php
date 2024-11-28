<?php

class  Gift
{
    public string $id;
    public Sticker $sticker;
    public int $star_count;
    public int|null $total_count;
    public int|null $remaining_count;
}