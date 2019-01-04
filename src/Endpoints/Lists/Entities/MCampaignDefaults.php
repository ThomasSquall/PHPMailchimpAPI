<?php

namespace PHPMailchimp\Entities;

class MCampaignDefaults
{
    /**
     * The default from name for campaigns sent to this list.
     * Title: Sender's Name
     * Type: String
     * @var string $from_name
     *
     * @PHPMailchimp\Annotations\Required
     */
    public $from_name;

    /**
     * The default from email for campaigns sent to this list.
     * Title: Sender's Email Address
     * Type: String
     * @var string $from_email
     *
     * @PHPMailchimp\Annotations\Required
     */
    public $from_email;

    /**
     * The default subject line for campaigns sent to this list.
     * Title: Subject
     * Type: String
     * @var string $subject
     *
     * @PHPMailchimp\Annotations\Required
     */
    public $subject;

    /**
     * The default language for this lists’s forms.
     * Title: Language
     * Type: String
     * @var string $language
     *
     * @PHPMailchimp\Annotations\Required
     */
    public $language;
}