<?php

class  RefundedPayment
{
    public string $currency;
    public int $total_amount;
    public string $invoice_payload;
    public string $telegram_payment_charge_id;
    public string|null $provider_payment_charge_id;
}