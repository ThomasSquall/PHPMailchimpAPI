<?php

namespace PHPMailchimp\Entities;

class MListContact
{
    /**
     * The company name for the list.
     * Title: Company Name
     * Type: String
     * @var string $company
     *
     * @PHPMailchimp\Annotations\Required
     */
    public $company;

    /**
     * The street address for the list contact.
     * Title: Address
     * Type: String
     * @var string $address1
     *
     * @PHPMailchimp\Annotations\Required
     */
    public $address1;

    /**
     * The street address for the list contact.
     * Title: Address
     * Type: String
     * @var string $address2
     */
    public $address2;

    /**
     * The city for the list contact.
     * Title: City
     * Type: String
     * @var string $city
     *
     * @PHPMailchimp\Annotations\Required
     */
    public $city;

    /**
     * The state for the list contact.
     * Title: State
     * Type: String
     * @var string $state
     *
     * @PHPMailchimp\Annotations\Required
     */
    public $state;

    /**
     * The postal or zip code for the list contact.
     * Title: Postal Code
     * Type: String
     * @var string $zip
     *
     * @PHPMailchimp\Annotations\Required
     */
    public $zip;

    /**
     * A two-character ISO3166 country code. Defaults to US if invalid.
     * Title: Country Code
     * Type: String
     * @var string $country
     *
     * @PHPMailchimp\Annotations\Required
     */
    public $country;

    /**
     * The phone number for the list contact.
     * Title: Phone Number
     * Type: String
     * @var string $phone
     */
    public $phone;
}