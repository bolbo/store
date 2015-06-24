<?php
/**
 * PhoneNumber.php
 *
 * @author    Bolbo
 */
namespace Bolbo\Component\Person\Model;

use Bolbo\Component\Core\ValueObject;

/**
 * Class PhoneNumber
 * @package Bolbo\Component\Person\Model
 */
class PhoneNumber implements ValueObject
{
    /**
     * @var string
     */
    private $value;
    /**
     * @var string
     */
    private $format;

    /**
     * Create a new PhoneNumber
     *
     * @param string $value
     * @param string $format
     */
    public function __construct($value, $format)
    {
        $this->value  = $value;
        $this->format = $format;
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
