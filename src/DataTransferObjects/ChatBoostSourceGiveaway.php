<?php

class  ChatBoostSourceGiveaway
{
    public string $source;
    public int $giveaway_message_id;
    public User|null $user;
    public int|null $prize_star_count;
    public true|null $is_unclaimed;
}