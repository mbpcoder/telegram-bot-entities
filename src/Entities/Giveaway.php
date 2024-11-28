<?php

class  Giveaway
{
    /**
     * @var array<Chat>
     */
    public array $chats;
    public int $winners_selection_date;
    public int $winner_count;
    public true|null $only_new_members;
    public true|null $has_public_winners;
    public string|null $prize_description;
    /**
     * @var array<string>|null
     */
    public array|null $country_codes;
    public int|null $prize_star_count;
    public int|null $premium_subscription_month_count;
}