<?php

namespace PHPMailchimp\Annotations;

class PossibleValuesAnnotation extends \PHPAnnotations\Annotations\Annotation
{
    /**
     * @var array $values
     */
    protected $values;

    /**
     * PossibleValues constructor.
     * @param array $values
     * @throws \Exception
     */
    public function __construct(array $values)
    {
        if (!is_array($values))
            throw new \Exception("PossibleValues annotation requires an array to be passed!");

        $this->values = $values;
    }

    /**
     * Returns true or false whether the value is accepted or not.
     * @param mixed $value
     * @return bool
     */
    public function acceptValue($value) { return in_array($value, $this->values); }
}