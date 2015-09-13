<?php

namespace MehrAlsNix\Jacky\Annotations;

use Doctrine\Common\Annotations\Annotation;
use Doctrine\Common\Annotations\Annotation\Target;

/**
 * @Annotation
 * @Target({"ANNOTATION","PROPERTY","METHOD"})
 */
class JsonProperty
{
    /**
     * @var boolean $required
     */
    public $required = false;

    /**
     * @var string $value
     */
    public $value = '';
}
