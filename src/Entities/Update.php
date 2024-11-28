<?php

class  Update
{
    public int $update_id;
    public Message|null $message;
    public Message|null $edited_message;
    public Message|null $channel_post;
    public Message|null $edited_channel_post;
    public BusinessConnection|null $business_connection;
    public Message|null $business_message;
    public Message|null $edited_business_message;
    public BusinessMessagesDeleted|null $deleted_business_messages;
    public MessageReactionUpdated|null $message_reaction;
    public MessageReactionCountUpdated|null $message_reaction_count;
    public InlineQuery|null $inline_query;
    public ChosenInlineResult|null $chosen_inline_result;
    public CallbackQuery|null $callback_query;
    public ShippingQuery|null $shipping_query;
    public PreCheckoutQuery|null $pre_checkout_query;
    public PaidMediaPurchased|null $purchased_paid_media;
    public Poll|null $poll;
    public PollAnswer|null $poll_answer;
    public ChatMemberUpdated|null $my_chat_member;
    public ChatMemberUpdated|null $chat_member;
    public ChatJoinRequest|null $chat_join_request;
    public ChatBoostUpdated|null $chat_boost;
    public ChatBoostRemoved|null $removed_chat_boost;
}