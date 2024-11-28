<?php

class  GiveawayCompleted
{
    public int $winner_count;
    public int|null $unclaimed_prize_count;
    public Message|null $giveaway_message;
    public true|null $is_star_giveaway;
}