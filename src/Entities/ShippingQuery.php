<?php

class  ShippingQuery
{
    public string $id;
    public User $from;
    public string $invoice_payload;
    public ShippingAddress $shipping_address;
}