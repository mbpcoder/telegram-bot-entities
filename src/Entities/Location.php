<?php

class  Location
{
    public float $latitude;
    public float $longitude;
    public float|null $horizontal_accuracy;
    public int|null $live_period;
    public int|null $heading;
    public int|null $proximity_alert_radius;
}