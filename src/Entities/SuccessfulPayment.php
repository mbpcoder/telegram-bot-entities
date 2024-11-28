<?php

class  SuccessfulPayment
{
    public string $currency;
    public int $total_amount;
    public string $invoice_payload;
    public int|null $subscription_expiration_date;
    public true|null $is_recurring;
    public true|null $is_first_recurring;
    public string|null $shipping_option_id;
    public OrderInfo|null $order_info;
    public string $telegram_payment_charge_id;
    public string $provider_payment_charge_id;
}