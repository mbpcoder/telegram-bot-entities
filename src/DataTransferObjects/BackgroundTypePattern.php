<?php

class  BackgroundTypePattern
{
    public string $type;
    public Document $document;
    public BackgroundFill $fill;
    public int $intensity;
    public true|null $is_inverted;
    public true|null $is_moving;
}