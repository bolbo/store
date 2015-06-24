<?php
/**
 * PersonInterface.php
 *
 * @author    Bolbo
 */
namespace Bolbo\Component\Person\Model;

/**
 * Common address model interface.
 *
 */
interface AddressInterface
{
    /**
     * Get street.
     *
     * @return string
     */
    public function getStreet();

    /**
     * Set street.
     *
     * @param string $street
     */
    public function setStreet($street);

    /**
     * Get street2.
     *
     * @return string
     */
    public function getStreet2();

    /**
     * Set street2.
     *
     * @param string $street
     */
    public function setStreet2($street);

    /**
     * Get postcode.
     *
     * @return string
     */
    public function getPostcode();

    /**
     * Set postcode.
     *
     * @param string $postcode
     */
    public function setPostcode($postcode);

    /**
     * Get city.
     *
     * @return string
     */
    public function getCity();

    /**
     * Set city.
     *
     * @param string $city
     */
    public function setCity($city);

    /**
     * Get country.
     *
     * @return string
     */
    public function getCountry();

    /**
     * Set country.
     *
     * @param string $country
     */
    public function setCountry($country = null);
}
