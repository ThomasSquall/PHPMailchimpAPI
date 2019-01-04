<?php

namespace PHPMailchimp\Entities;

class MList
{
    /**
     * A string that uniquely identifies this list.
     * Title: List ID
     * Type: String
     * @var string $id
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $id;

    /**
     * The ID used in the Mailchimp web application. View this list in your Mailchimp account at https://{dc}.admin.mailchimp.com/lists/members/?id={web_id}.
     * Title: List Web ID
     * Type: Integer
     * @var string $web_id
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $web_id;

    /**
     * The name of the list.
     * Title: List Name
     * Type: String
     * @var string $name
     *
     * @PHPMailchimp\Annotations\Required
     */
    public $name;

    /**
     * Contact information displayed in campaign footers to comply with international spam laws.
     * https://kb.mailchimp.com/lists/growth/about-the-required-email-footer-content?utm_source=mc-api&utm_medium=docs&utm_campaign=apidocs&_ga=2.146175348.177298918.1546026330-1538172298.1527193670
     * Title: List Contact
     * Type: Object
     * @var MListContact $contact
     *
     * @PHPMailchimp\Annotations\Required
     */
    public $contact;

    /**
     * The permission reminder for the list.
     * https://kb.mailchimp.com/accounts/compliance-tips/edit-the-permission-reminder?utm_source=mc-api&utm_medium=docs&utm_campaign=apidocs&_ga=2.192322922.177298918.1546026330-1538172298.1527193670
     * Title: Permission Reminder
     * Type: String
     * @var string $permission_reminder
     *
     * @PHPMailchimp\Annotations\Required
     */
    public $permission_reminder;

    /**
     * Whether campaigns for this list use the Archive Bar in archives by default.
     * https://kb.mailchimp.com/campaigns/archives/about-the-archive-bar?utm_source=mc-api&utm_medium=docs&utm_campaign=apidocs&_ga=2.179672420.177298918.1546026330-1538172298.1527193670
     * Title: Use Archive Bar
     * Type: Boolean
     * @var bool $use_archive_bar
     */
    public $use_archive_bar;

    /**
     * Default values for campaigns created for this list.
     * https://kb.mailchimp.com/campaigns/design/set-up-email-subject-from-name-and-from-email-address-on-a-campaign?utm_source=mc-api&utm_medium=docs&utm_campaign=apidocs&_ga=2.124272074.177298918.1546026330-1538172298.1527193670
     * Title: Campaign Defaults
     * Type: Object
     * @var MCampaignDefaults $campaign_defaults
     *
     * @PHPMailchimp\Annotations\Required
     */
    public $campaign_defaults;

    /**
     * The email address to send subscribe notifications to.
     * https://kb.mailchimp.com/lists/managing-subscribers/change-subscribe-and-unsubscribe-notifications?utm_source=mc-api&utm_medium=docs&utm_campaign=apidocs&_ga=2.111123909.177298918.1546026330-1538172298.1527193670
     * Title: Notify on Subscribe
     * Type: String
     * @var string $notify_on_subscribe
     */
    public $notify_on_subscribe;

    /**
     * The email address to send unsubscribe notifications to.
     * https://kb.mailchimp.com/lists/managing-subscribers/change-subscribe-and-unsubscribe-notifications?utm_source=mc-api&utm_medium=docs&utm_campaign=apidocs&_ga=2.120945096.177298918.1546026330-1538172298.1527193670
     * Title: Notify on Unsubscribe
     * Type: String
     * @var string $notify_on_unsubscribe
     */
    public $notify_on_unsubscribe;

    /**
     * The date and time that this list was created in ISO 8601 format.
     * Title: Creation Date
     * Type: String
     * @var string $date_created
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $date_created;

    /**
     * An auto-generated activity score for the list (0-5).
     * Title: List Rating
     * Type: Integer
     * @var int $list_rating
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $list_rating;

    /**
     * Whether the list supports multiple formats for emails. When set to true, subscribers can choose whether they want to receive HTML or plain-text emails. When set to false, subscribers will receive HTML emails, with a plain-text alternative backup.
     * https://kb.mailchimp.com/lists/growth/how-to-change-list-name-and-defaults?utm_source=mc-api&utm_medium=docs&utm_campaign=apidocs&_ga=2.120945096.177298918.1546026330-1538172298.1527193670#Change-Subscription-Settings
     * Title: Email Type Option
     * Type: Boolean
     * @var bool $email_type_option
     *
     * @PHPMailchimp\Annotations\Required
     */
    public $email_type_option;

    /**
     * Our EepURL shortened version of this list’s subscribe form.
     * https://kb.mailchimp.com/lists/signup-forms/share-your-signup-form?utm_source=mc-api&utm_medium=docs&utm_campaign=apidocs&_ga=2.114118983.177298918.1546026330-1538172298.1527193670#Signup-Form-URL
     * Title: Subscribe URL Short
     * Type: String
     * @var string $subscribe_url_short
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $subscribe_url_short;

    /**
     * The full version of this list’s subscribe form (host will vary).
     * Title: Subscribe URL Long
     * Type: String
     * @var string $subscribe_url_long
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $subscribe_url_long;

    /**
     * The list’s Email Beamer address.
     * https://kb.mailchimp.com/campaigns/ways-to-build/use-email-beamer-to-create-a-campaign?utm_source=mc-api&utm_medium=docs&utm_campaign=apidocs&_ga=2.154506616.177298918.1546026330-1538172298.1527193670
     * Title: Beamer Address
     * Type: String
     * @var string $beamer_address
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $beamer_address;

    /**
     * Whether this list is public or private.
     * https://kb.mailchimp.com/lists/growth/about-publicity-settings?utm_source=mc-api&utm_medium=docs&utm_campaign=apidocs&_ga=2.157636090.177298918.1546026330-1538172298.1527193670
     * Title: Visibility
     * Type: String
     * @var string $visibility
     *
     * @PHPMailchimp\Annotations\PossibleValues(values = [pub, prv])
     */
    public $visibility;

    /**
     * Whether or not to require the subscriber to confirm subscription via email.
     * Title: Double Opt In
     * Type: Boolean
     * @var bool $double_optin
     */
    public $double_optin;

    /**
     * Whether or not the list has marketing permissions (eg. GDPR) enabled.
     * Title: Marketing Permissions
     * Type: Boolean
     * @var bool $marketing_permissions
     */
    public $marketing_permissions;

    /**
     * Any list-specific modules installed for this list.
     * Title: Modules
     * Type: Array
     * @var array $modules
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $modules;

    /**
     * Stats for the list. Many of these are cached for at least five minutes.
     * Title: Statistics
     * Type Object
     * @var MStats $stats
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $stats;

    /**
     * A list of link types and descriptions for the API schema documents.
     * Title: Links
     * Type: Array
     * @var array[MLink] $_links
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $_links;
}