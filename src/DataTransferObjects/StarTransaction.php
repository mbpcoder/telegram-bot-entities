<?php

class  StarTransaction
{
    public string $id;
    public int $amount;
    public int $date;
    public TransactionPartner|null $source;
    public TransactionPartner|null $receiver;
}