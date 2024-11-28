<?php

class  InputVenueMessageContent
{
    public float $latitude;
    public float $longitude;
    public string $title;
    public string $address;
    public string|null $foursquare_id;
    public string|null $foursquare_type;
    public string|null $google_place_id;
    public string|null $google_place_type;
}