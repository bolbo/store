<?php
/**
 * ProductInterface.php
 *
 * @author    Bolbo
 */
namespace Bolbo\Component\Product\Model;

use Bolbo\Component\Core\Model\SoftDeletableInterface;
use Bolbo\Component\Core\Model\TimestampableInterface;

/**
 * Product
 *
 */
interface ProductInterface extends TimestampableInterface, SoftDeletableInterface
{
    /**
     * @return mixed
     */
    public function getStatus();

    /**
     * @param StatusInterface $status
     * @return mixed
     */
    public function setStatus(StatusInterface $status);

    /**
     * @param Reference $reference
     * @return mixed
     */
    public function setReference(Reference $reference);

    /**
     * @return Reference
     */
    public function getReference();

    /**
     * @return mixed
     */
    public function getTitle();

    /**
     * @param $value
     * @return mixed
     */
    public function setTitle($value);

    /**
     * @return mixed
     */
    public function getDescription();

    /**
     * @param $value
     * @return mixed
     */
    public function setDescription($value);

    /**
     * @return mixed
     */
    public function getCaracteristic();

    /**
     * @param $value
     * @return mixed
     */
    public function setCaracteristic($value);

    /**
     * @return Price
     */
    public function getPrice();

    /**
     * @param Price $price
     * @return mixed
     */
    public function setPrice(Price $price);
}