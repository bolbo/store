<?php
/**
 * ProductInterface.php
 *
 * @author    Bolbo
 */
namespace Bolbo\Component\Store\Model;

use Bolbo\Component\Resource\Model\SoftDeletableInterface;
use Bolbos\Component\Resource\Model\TimestampableInterface;

/**
 * Product
 *
 */
interface ProductInterface extends TimestampableInterface, SoftDeletableInterface
{
    public function getStatus();

    public function setStatus(StatusInterface $status);

    public function getReference(Reference $reference);
}