<?php
/**
 * AuthorInterface.php
 * @package Bolbo\Component\Person\Model
 * @author Bolbo
 */
namespace Bolbo\Component\Person\Model;

use Bolbo\Component\Resource\Model\SoftDeletableInterface;
use Bolbos\Component\Resource\Model\TimestampableInterface;

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