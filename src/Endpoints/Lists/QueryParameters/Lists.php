<?php

namespace PHPMailchimp\QueryParameters;

class Lists
{
    /**
     * A comma-separated list of fields to return. Reference parameters of sub-objects with dot notation.
     * Title: Fields
     * Type: Array
     * @var array $fields
     */
    public $fields;

    /**
     * A comma-separated list of fields to exclude. Reference parameters of sub-objects with dot notation.
     * Title: Exclude Fields
     * Type: Array
     * @var array $exclude_fields
     */
    public $exclude_fields;

    /**
     * The number of records to return. Default value is 10.
     * https://developer.mailchimp.com/documentation/mailchimp/guides/get-started-with-mailchimp-api-3/#pagination
     * Title: Count
     * Type: Integer
     * @var int $count
     */
    public $count;

    /**
     * The number of records from a collection to skip. Iterating over large collections with this parameter can be slow. Default value is 0.
     * https://developer.mailchimp.com/documentation/mailchimp/guides/get-started-with-mailchimp-api-3/#pagination
     * Title: Offset
     * Type: Integer
     * @var int $offset
     */
    public $offset;

    /**
     * Restrict response to lists created before the set date. We recommend ISO 8601 time format: 2015-10-21T15:41:36+00:00.
     * https://en.wikipedia.org/wiki/ISO_8601
     * Title: Before Date Created
     * Type: String
     * @var string $before_date_created
     */
    public $before_date_created;

    /**
     * Restrict results to lists created after the set date. We recommend ISO 8601 time format: 2015-10-21T15:41:36+00:00.
     * https://en.wikipedia.org/wiki/ISO_8601
     * Title: Since Date Created
     * Type: String
     * @var string $since_data_created
     */
    public $since_data_created;

    /**
     * Restrict results to lists created before the last campaign send date. We recommend ISO 8601 time format: 2015-10-21T15:41:36+00:00.
     * https://en.wikipedia.org/wiki/ISO_8601
     * Title: Before Campaign Last Sent
     * Type: String
     * @var string $before_campaign_last_sent
     */
    public $before_campaign_last_sent;

    /**
     * Restrict results to lists created after the last campaign send date. We recommend ISO 8601 time format: 2015-10-21T15:41:36+00:00.
     * https://en.wikipedia.org/wiki/ISO_8601
     * Title: Since Campaign Last Sent
     * Type: String
     * @var string $since_campaign_last_sent
     */
    public $since_campaign_last_sent;

    /**
     * Restrict results to lists that include a specific subscriber’s email address.
     * Title: Subscriber Email
     * Type: String
     * @var string $email
     */
    public $email;

    /**
     * Returns files sorted by the specified field.
     * Title: Sort By Field
     * Type: String
     * @var string $sort_field
     *
     * @PHPMailchimp\Annotations\PossibleValues([date_created])
     */
    public $sort_field;

    /**
     * Determines the order direction for sorted results.
     * Title: Sort Direction
     * Type: String
     * @var string $sort_dir
     *
     * @PHPMailchimp\Annotations\PossibleValues([ASC, DESC])
     */
    public $sort_dir;
}