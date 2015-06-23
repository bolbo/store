<?php
/**
 * Email.php
 *
 * @author    Bolbo
 */
namespace Bolbo\Component\Person\Model;

use Assert\Assertion;
use Bolbo\Component\Core\ValueObject;

/**
 * Class Email
 * @package Bolbo\Component\Person\Model
 */
class Email implements ValueObject
{
    /**
     * @var string
     */
    private $value;

    /**
     * Create a new Email
     *
     * @param string $value
     */
    public function __construct($value)
    {
        Assertion::email($value);

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
        return new Email($native);
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
