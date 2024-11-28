<?php

class  InputInvoiceMessageContent
{
    public string $title;
    public string $description;
    public string $payload;
    public string|null $provider_token;
    public string $currency;
    /**
     * @var array<LabeledPrice>
     */
    public array $prices;
    public int|null $max_tip_amount;
    /**
     * @var array<int>|null
     */
    public array|null $suggested_tip_amounts;
    public string|null $provider_data;
    public string|null $photo_url;
    public int|null $photo_size;
    public int|null $photo_width;
    public int|null $photo_height;
    public bool|null $need_name;
    public bool|null $need_phone_number;
    public bool|null $need_email;
    public bool|null $need_shipping_address;
    public bool|null $send_phone_number_to_provider;
    public bool|null $send_email_to_provider;
    public bool|null $is_flexible;
}