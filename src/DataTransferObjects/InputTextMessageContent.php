<?php

class  InputTextMessageContent
{
    public string $message_text;
    public string|null $parse_mode;
    /**
     * @var array<MessageEntity>|null
     */
    public array|null $entities;
    public LinkPreviewOptions|null $link_preview_options;
}