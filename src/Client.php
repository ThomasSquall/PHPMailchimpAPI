<?php

namespace PHPMailchimp;

use PHPAnnotations\Reflection\Reflector;

class Client
{
    /**
     * @var \PHPMailchimp\Endpoints\ListsAPI $api
     */
    private $listsApi;

    /**
     * @var \PHPEasyAPI\Resolver $resolver
     */
    private $resolver;

    public function __construct($apiKey)
    {
        if (!string_contains($apiKey, "-"))
            throw new \Exception("Invalid API Key provided. Read more at https://mailchimp.com/help/about-api-keys/");

        $dataCenter = explode("-", $apiKey)[1];
        $this->listsApi = new \PHPMailchimp\Endpoints\ListsAPI($dataCenter, "", $apiKey);
    }

    /**
     * @return mixed
     */
    public function getLists()
    {
        $this->resolver->makeRequest($this->listsApi, "getLists");

        $result = $this->listsApi->getLists;
        $this->listsApi->getLists = [];

        foreach ($result['lists'] as $index => $list)
        {
            $list = array_to_object($list, new \PHPMailchimp\Entities\MList());
            $list->contact = array_to_object($list->contact, new \PHPMailchimp\Entities\MListContact());
            $list->campaign_defaults = array_to_object($list->campaign_defaults, new \PHPMailchimp\Entities\MCampaignDefaults());
            $list->stats = array_to_object($list->stats, new \PHPMailchimp\Entities\MStats());

            foreach ($list->_links as $_lIndex => $_link)
            {
                $_link = array_to_object($_link, new \PHPMailchimp\Entities\MLink());
                $list->_links[$_lIndex] = $_link;
            }

            $result['lists'][$index] = $list;
        }

        foreach ($result['_links'] as $index => $_link)
        {
            $_link = array_to_object($_link, new \PHPMailchimp\Entities\MLink());
            $result['_links'][$index] = $_link;
        }

        return $result;
    }

    /**
     * Create a new list
     * @param Entities\MList $list
     * @return \PHPMailchimp\Entities\MList|\PHPMailchimp\Error
     */
    public function createList(\PHPMailchimp\Entities\MList $list)
    {
        $this->checkRequired($list);
        $this->cleanReadOnly($list);

        $this->resolver->makeRequest($this->listsApi, "postLists", $list);
        $result = $this->getError($this->listsApi->postLists);

        if ($result === false)
        {
            $result = $this->listsApi->postLists;
            $result = array_to_object($result, new \PHPMailchimp\Entities\MList());
            $result->contact = array_to_object($result->contact, new \PHPMailchimp\Entities\MListContact());
            $result->campaign_defaults = array_to_object($result->campaign_defaults, new \PHPMailchimp\Entities\MCampaignDefaults());
            $result->stats = array_to_object($result->stats, new \PHPMailchimp\Entities\MStats());

            foreach ($result->_links as $_lIndex => $_link)
            {
                $_link = array_to_object($_link, new \PHPMailchimp\Entities\MLink());
                $result->_links[$_lIndex] = $_link;
            }
        }

        $this->listsApi->postLists = [];

        return $result;
    }

    private function getError($array)
    {
        $result = array_to_object($array, new \PHPMailchimp\Error());

        /** @var \PHPMailchimp\Error $result */
        if (!(isset($result->type) || isset($result->detail))) {
            $result = false;
        }

        return $result;
    }

    private function cleanReadOnly(object &$object)
    {
        $reflected = new Reflector($object);

        $toUnset = [];

        foreach ($reflected->getProperties() as $name => $property)
        {
            /** @var \PHPAnnotations\Reflection\ReflectionProperty $property */
            if ($property->hasAnnotation('ReadOnly'))
                $toUnset[] = $name;

            if (!in_array($name, $toUnset) && is_object($object->{$name}))
                $this->cleanReadOnly($object->{$name});
        }

        $object = (array)$object;

        foreach ($toUnset as $prop)
            unset($object[$prop]);
    }

    private function checkRequired(object $object)
    {
        $reflected = new Reflector($object);

        foreach ($reflected->getProperties() as $name => $property)
        {
            /** @var \PHPAnnotations\Reflection\ReflectionProperty $property */
            if ($property->hasAnnotation('Required') && is_null($object->{$name}))
                throw new \Exception("Property $name of " . get_class($object) . " cannot be empty!");

            if (is_object($object->{$name}))
                $this->checkRequired($object->{$name});
        }
    }
}