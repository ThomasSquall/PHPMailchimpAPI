<?php

namespace PHPMailchimp\Endpoints;

/**
 * Class ListsAPI.
 * @PHPEasyAPI\Client
 */
class ListsAPI extends \PHPMailchimp\BaseAPI
{
    /**
     * @PHPEasyAPI\Enrichment\Endpoint(method = "GET", url = "{$baseUrl}/lists/")
     * @PHPEasyAPI\Enrichment\User(username = "{$username}", password = "{$apiKey}")
     * @PHPEasyAPI\Enrichment\JSON
     */
    var $getLists;

    /**
     * @PHPEasyAPI\Enrichment\Endpoint(method = "POST", url = "{$baseUrl}/lists/")
     * @PHPEasyAPI\Enrichment\User(username = "{$username}", password = "{$apiKey}")
     * @PHPEasyAPI\Enrichment\JSON
     */
    var $postLists;
}