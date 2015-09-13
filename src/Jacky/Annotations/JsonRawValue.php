<?php

namespace MehrAlsNix\Jacky\Annotations;

use Doctrine\Common\Annotations\Annotation;
use Doctrine\Common\Annotations\Annotation\Target;

/**
 * @Annotation
 * @Target({"ANNOTATION","METHOD","PROPERTY"})
 */
class JsonRawValue
{
    /**
     * @var boolean $value
     */
    private $value;

    public function __construct(array $values)
    {
        $this->value = isset($values['value']) ? $values['value'] : true;
    }
}
