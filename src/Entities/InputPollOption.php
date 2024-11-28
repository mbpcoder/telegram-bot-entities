<?php

class  InputPollOption
{
    public string $text;
    public string|null $text_parse_mode;
    /**
     * @var array<MessageEntity>|null
     */
    public array|null $text_entities;
}