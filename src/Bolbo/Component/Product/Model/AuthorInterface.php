<?php
/**
 * AuthorInterface.php
 * @package Bolbo\Component\Product\Model
 * @author Bolbo
 */
namespace Bolbo\Component\Product\Model;

use Bolbo\Component\Person\Model\AddressInterface;
use Bolbo\Component\Person\Model\GenderInterface;
use Bolbo\Component\Person\Model\PersonInterface;
use Bolbo\Component\Resource\Model\SoftDeletableInterface;
use Bolbo\Component\Resource\Model\TimestampableInterface;

/**
 * Interface AuthorInterface
 * @package Bolbo\Component\Person\Model
 */
interface AuthorInterface extends
    TimestampableInterface,
    SoftDeletableInterface,
    GenderInterface,
    PersonInterface,
    AddressInterface
{
}
