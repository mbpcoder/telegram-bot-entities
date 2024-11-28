<?php

class  ShippingOption
{
    public string $id;
    public string $title;
    /**
     * @var array<LabeledPrice>
     */
    public array $prices;
}