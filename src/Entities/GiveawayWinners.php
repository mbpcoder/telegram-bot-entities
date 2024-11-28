<?php

class  GiveawayWinners
{
    public Chat $chat;
    public int $giveaway_message_id;
    public int $winners_selection_date;
    public int $winner_count;
    /**
     * @var array<User>
     */
    public array $winners;
    public int|null $additional_chat_count;
    public int|null $prize_star_count;
    public int|null $premium_subscription_month_count;
    public int|null $unclaimed_prize_count;
    public true|null $only_new_members;
    public true|null $was_refunded;
    public string|null $prize_description;
}