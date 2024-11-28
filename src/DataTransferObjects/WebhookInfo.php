<?php

class  WebhookInfo
{
    public string $url;
    public bool $has_custom_certificate;
    public int $pending_update_count;
    public string|null $ip_address;
    public int|null $last_error_date;
    public string|null $last_error_message;
    public int|null $last_synchronization_error_date;
    public int|null $max_connections;
    /**
     * @var array<string>|null
     */
    public array|null $allowed_updates;
}