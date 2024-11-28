<?php

class  Game
{
    public string $title;
    public string $description;
    /**
     * @var array<PhotoSize>
     */
    public array $photo;
    public string|null $text;
    /**
     * @var array<MessageEntity>|null
     */
    public array|null $text_entities;
    public Animation|null $animation;
}