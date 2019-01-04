<?php

namespace PHPMailchimp;

class BaseAPI
{
    public $baseUrl;
    public $username;
    public $apiKey;

    public function __construct($dataCenter, $username, $apiKey)
    {
        $this->baseUrl = "https://$dataCenter.api.mailchimp.com/3.0";
        $this->username = $username;
        $this->apiKey = $apiKey;
    }
}