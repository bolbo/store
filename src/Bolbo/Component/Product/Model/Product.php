<?php
/**
 * Product.php
 *
 * PHP version 5
 *
 * LICENSE: Eskalad
 *
 * @category  CategoryName
 * @package Bolbo\Component\Product\Model
 * @author    laurent
 * @copyright 2014-2015 Eskalad
 * @license   http://www.eskalad.net Eskalad
 * @link      http://www.eskalad.net
 */

namespace Bolbo\Component\Product\Model;


/**
 * Class Product
 * @package Bolbo\Component\Product\Model
 */
class Product implements ProductInterface
{
    /**
     * @var
     */
    protected $createdAt;
    /**
     * @var
     */
    protected $updatedAt;
    /**
     * @var
     */
    protected $deletedAt;
    /**
     * @var
     */
    protected $status;
    /**
     * @var
     */
    protected $reference;
    /**
     * @var
     */
    protected $title;
    /**
     * @var
     */
    protected $description;
    /**
     * @var
     */
    protected $caracteristic;
    /**
     * @var
     */
    protected $price;

    /**
     * @return mixed
     */
    public function getStatus()
    {
        // TODO: Implement getStatus() method.
    }

    /**
     * @param StatusInterface $status
     * @return mixed
     */
    public function setStatus(StatusInterface $status)
    {
        // TODO: Implement setStatus() method.
    }

    /**
     * @param Reference $reference
     * @return mixed
     */
    public function setReference(Reference $reference)
    {
        // TODO: Implement setReference() method.
    }

    /**
     * @return Reference
     */
    public function getReference()
    {
        // TODO: Implement getReference() method.
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        // TODO: Implement getTitle() method.
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setTitle($value)
    {
        // TODO: Implement setTitle() method.
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        // TODO: Implement getDescription() method.
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setDescription($value)
    {
        // TODO: Implement setDescription() method.
    }

    /**
     * @return mixed
     */
    public function getCaracteristic()
    {
        // TODO: Implement getCaracteristic() method.
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setCaracteristic($value)
    {
        // TODO: Implement setCaracteristic() method.
    }

    /**
     * @return Price
     */
    public function getPrice()
    {
        // TODO: Implement getPrice() method.
    }

    /**
     * @param Price $price
     * @return mixed
     */
    public function setPrice(Price $price)
    {
        // TODO: Implement setPrice() method.
    }

    /**
     * Is item deleted?
     *
     * @return bool
     */
    public function isDeleted()
    {
        // TODO: Implement isDeleted() method.
    }

    /**
     * Get the time of deletion.
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        // TODO: Implement getDeletedAt() method.
    }

    /**
     * Set deletion time.
     *
     * @param \DateTime $deletedAt
     */
    public function setDeletedAt(\DateTime $deletedAt = null)
    {
        // TODO: Implement setDeletedAt() method.
    }

    /**
     * Get creation time.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        // TODO: Implement getCreatedAt() method.
    }

    /**
     * Get the time of last update.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        // TODO: Implement getUpdatedAt() method.
    }

    /**
     * Set creation time.
     *
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        // TODO: Implement setCreatedAt() method.
    }

    /**
     * Set the time of last update.
     *
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        // TODO: Implement setUpdatedAt() method.
    }

}