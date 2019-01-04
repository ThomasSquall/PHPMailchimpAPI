<?php

namespace PHPMailchimp\Entities;

class MAuthorizedApps
{
    /**
     * The client’s unique id/username for authorization.
     * Title: Client ID
     * Type: String
     * @var string $client_id
     *
     * @PHPMailchimp\Annotations\Required
     */
    public $client_id;

    /**
     * The client password for authorization.
     * Title: Client Secret
     * Type: String
     * @var string $client_secret
     *
     * @PHPMailchimp\Annotations\Required
     */
    public $client_secret;
}