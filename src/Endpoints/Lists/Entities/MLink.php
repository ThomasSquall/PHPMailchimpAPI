<?php

namespace PHPMailchimp\Entities;

class MLink
{
    /**
     * As with an HTML ‘rel’ attribute, this describes the type of link.
     * Title: Rel
     * Type: String
     * @var string $rel
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $rel;

    /**
     * This property contains a fully-qualified URL that can be called to retrieve the linked resource or perform the linked action.
     * Title: Href
     * Type: String
     * @var string $rel
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $href;

    /**
     * The HTTP method that should be used when accessing the URL defined in ‘href’.
     * Title: Method
     * Type: String
     * @var string $method
     *
     * @PHPMailchimp\Annotations\ReadOnly
     * @PHPMailchimp\Annotations\PossibleValues(values = [GET, POST, PUT, PATCH, DELETE, OPTION, HEAD])
     */
    public $method;

    /**
     * For GETs, this is a URL representing the schema that the response should conform to.
     * Title: Target Schema
     * Type: String
     * @var string $targetSchema
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $targetSchema;

    /**
     *For HTTP methods that can receive bodies (POST and PUT), this is a URL representing the schema that the body should conform to.
     * Title: Schema
     * Type: String
     * @var string $schema
     *
     * @PHPMailchimp\Annotations\ReadOnly
     */
    public $schema;
}