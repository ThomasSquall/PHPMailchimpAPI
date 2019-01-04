<?php

namespace PHPMailchimp\Entities;

class MStats
{
    /**
     * The number of active members in the list.
     * Title: Member Count
     * Type: Integer
     * @var int $member_count
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $member_count;

    /**
     * The number of members who have unsubscribed from the list.
     * Title: Unsubscribe Count
     * Type: Integer
     * @var int $unsubscribe_count
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $unsubscribe_count;

    /**
     * The number of members cleaned from the list.
     * Title: Cleaned Count
     * Type: Integer
     * @var int $cleaned_count
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $cleaned_count;

    /**
     * The number of active members in the list since the last campaign was sent.
     * Title: Member Count Since Send
     * Type: Integer
     * @var int $member_count_since_send
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $member_count_since_send;


    /**
     * The number of members who have unsubscribed since the last campaign was sent.
     * Title: Unsubscribe Count Since Send
     * Type: Integer
     * @var int $unsubscribe_count_since_send
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $unsubscribe_count_since_send;

    /**
     * The number of members cleaned from the list since the last campaign was sent.
     * Title: Cleaned Count Since Send
     * Type: Integer
     * @var int $cleaned_count_since_send
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $cleaned_count_since_send;

    /**
     * The number of campaigns in any status that use this list.
     * Title: Campaign Count
     * Type: Integer
     * @var int $campaign_count
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $campaign_count;

    /**
     * The date and time the last campaign was sent to this list in ISO 8601 format. This is updated when a campaign is sent to 10 or more recipients.
     * Title: Campaign Last Sent
     * Type: String
     * @var string $campaign_last_sent
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $campaign_last_sent;

    /**
     * The number of merge vars for this list (not EMAIL, which is required).
     * Title: Merge Var Count
     * Type: Integer
     * @var int $merge_field_count
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $merge_field_count;

    /**
     * The average number of subscriptions per month for the list (not returned if we haven’t calculated it yet).
     * Title: Average Subscription Rate
     * Type: Number
     * @var float $unsubscribe_count
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $avg_sub_rate;

    /**
     * The average number of unsubscriptions per month for the list (not returned if we haven’t calculated it yet).
     * Title: Average Unsubscription Rate
     * Type: Number
     * @var float $unsubscribe_count
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $avg_unsub_rate;

    /**
     * The target number of subscriptions per month for the list to keep it growing (not returned if we haven’t calculated it yet).
     * Title: Average Subscription Rate
     * Type: Number
     * @var float $unsubscribe_count
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $target_sub_rate;

    /**
     * The average open rate (a percentage represented as a number between 0 and 100) per campaign for the list (not returned if we haven’t calculated it yet).
     * Title: Open Rate
     * Type: Number
     * @var float $unsubscribe_count
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $open_rate;

    /**
     * The average click rate (a percentage represented as a number between 0 and 100) per campaign for the list (not returned if we haven’t calculated it yet).
     * Title: Click Rate
     * Type: Number
     * @var float $unsubscribe_count
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $click_rate;

    /**
     * The date and time of the last time someone subscribed to this list in ISO 8601 format.
     * Title: Date of Last List Subscribe
     * Type: String
     * @var string $unsubscribe_count
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $last_sub_date;

    /**
     * The date and time of the last time someone unsubscribed from this list in ISO 8601 format.
     * Title: Date of Last List Unsubscribe
     * Type: String
     * @var string $unsubscribe_count
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $last_unsub_date;
}