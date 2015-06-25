<?php
/**
 * Price.php
 *
 * @author    Bolbo
 */
namespace Bolbo\Component\Product\Model;

use Assert\Assertion;
use Bolbo\Component\Core\ValueObject;

/**
 * Class Price
 * @package Bolbo\Component\Product\Model
 */
class Price implements ValueObject
{
    /**
     * @var string
     */
    private $value;

    /**
     * Create a new Price
     *
     * @param string $value
     */
    public function __construct($value)
    {
        Assertion::nullOrFloat($value);

        $this->value = $value;
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
