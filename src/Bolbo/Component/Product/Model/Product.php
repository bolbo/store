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
     * @var Reference
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
     *
     */
    public function __construct(Reference $reference)
    {
        $this->createdAt = new \DateTime();
        $this->price     = new Price(0.0);
        $this->status    = null;
        $this->reference = $reference;
    }

    /**
     * Get creation time.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set creation time.
     *
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get the time of last update.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }


    /**
     * Set the time of last update.
     *
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }


    /**
     * Get the time of deletion.
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }


    /**
     * Set deletion time.
     *
     * @param \DateTime $deletedAt
     */
    public function setDeletedAt(\DateTime $deletedAt = null)
    {
        $this->deletedAt = $deletedAt;
    }

    /**
     * Is item deleted?
     *
     * @return bool
     */
    public function isDeleted()
    {
        return null !== $this->deletedAt;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param StatusInterface $status
     * @return mixed
     */
    public function setStatus(StatusInterface $status)
    {
        $this->status = $status;
    }

    /**
     * @param Reference $reference
     * @return mixed
     */
    public function setReference(Reference $reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return Reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setTitle($value)
    {
        $this->title = $value;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setDescription($value)
    {
        $this->description = $value;
    }

    /**
     * @return mixed
     */
    public function getCaracteristic()
    {
        return $this->caracteristic;
    }

    /**
     * @param $value
     * @return mixed
     */
    public function setCaracteristic($value)
    {
        $this->caracteristic = $value;
    }

    /**
     * @return Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param Price $price
     * @return mixed
     */
    public function setPrice(Price $price)
    {
        $this->price = $price;
    }


}