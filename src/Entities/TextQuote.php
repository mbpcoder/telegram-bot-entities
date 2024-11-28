<?php

class  TextQuote
{
    public string $text;
    /**
     * @var array<MessageEntity>|null
     */
    public array|null $entities;
    public int $position;
    public true|null $is_manual;
}