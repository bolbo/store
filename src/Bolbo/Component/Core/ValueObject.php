<?php
/**
 * ValueObject.php
 *
 * @author    Bolbo
 */
namespace Bolbo\Component\Core;

/**
 * Interface ValueObject
 * @package Bolbo\Component\Core
 */
interface ValueObject
{
    /**
     * Determine equality with another Value Object
     *
     * @param ValueObject $object
     * @return bool
     */
    public function equals(ValueObject $object);
}
