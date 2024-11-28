<?php

class  TransactionPartnerUser
{
    public string $type;
    public User $user;
    public string|null $invoice_payload;
    public int|null $subscription_period;
    /**
     * @var array<PaidMedia>|null
     */
    public array|null $paid_media;
    public string|null $paid_media_payload;
    public Gift|null $gift;
}