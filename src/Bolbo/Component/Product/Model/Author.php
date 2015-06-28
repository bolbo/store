<?php
/**
 * Author.php
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

use Bolbo\Component\Person\Model\GenderInterface;

/**
 * Class Author
 * @package Bolbo\Component\Product\Model
 */
class Author implements AuthorInterface
{
    protected $authorId;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * @var \DateTime
     */
    protected $deletedAt;
    /**
     * @var
     */
    protected $gender;
    /**
     * @var
     */
    protected $firstname;
    /**
     * @var
     */
    protected $lastname;
    /**
     * @var
     */
    protected $street;
    /**
     * @var
     */
    protected $street2;
    /**
     * @var
     */
    protected $postCode;
    /**
     * @var
     */
    protected $city;
    /**
     * @var
     */
    protected $country;


    /**
     *
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function __toString()
    {
        return $this->lastname . ' ' . $this->firstname;
    }

    /**
     * Get creation time.
     *
     * @return int
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * Set creation time.
     *
     * @param int
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
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
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param $firstname
     * @return mixed
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param $lastname
     * @return mixed
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }


    /**
     * Get street.
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set street.
     *
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * Get street2.
     *
     * @return string
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * Set street2.
     *
     * @param string $street
     */
    public function setStreet2($street)
    {
        $this->street = $street;
    }

    /**
     * Get postcode.
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postCode;
    }

    /**
     * Set postcode.
     *
     * @param string $postcode
     */
    public function setPostcode($postcode)
    {
        $this->postCode = $postcode;
    }

    /**
     * Get city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set city.
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Get country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set country.
     *
     * @param string $country
     */
    public function setCountry($country = null)
    {
        $this->country = $country;
    }

    /**
     * @return GenderInterface
     *
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param GenderInterface $gender
     * @return mixed
     */
    public function setGender(GenderInterface $gender)
    {
        $this->gender = $gender;
    }

}