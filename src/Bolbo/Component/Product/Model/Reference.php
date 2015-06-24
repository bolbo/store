<?php
namespace Bolbo\Component\Product\Model;

use Bolbo\Component\Core\ValueObject;

/**
 * Class Reference
 * @package Bolbo\Component\Product\Model
 */
class Reference implements ValueObject
{
    /**
     * @var string
     */
    private $value;

    /**
     * Create a new Reference
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Create a new instance from a native form
     *
     * @param mixed $native
     * @return ValueObject
     */
    public static function fromNative($native)
    {
        return new Reference($native);
    }

    /**
     * Determine equality with another Value Object
     *
     * @param ValueObject $object
     * @return bool
     */
    public function equals(ValueObject $object)
    {
        return $this == $object;
    }

    /**
     * Return the object as a string
     *
     * @return string
     */
    public function toString()
    {
        return $this->value;
    }

    /**
     * Return the object as a string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}
