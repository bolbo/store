<?php
/**
 * PersonInterface.php
 *
 * @author    Bolbo
 */
namespace Bolbo\Component\Person\Model;

/**
 * Interface PersonInterface
 * @package Bolbo\Component\Person\Model
 */
interface PersonInterface
{
    /**
     * @return GenderInterface
     *
     */
    public function getGender();


    /**
     * @param GenderInterface $gender
     * @return mixed
     */
    public function setGender(GenderInterface $gender);

    /**
     * @return mixed
     */
    public function getFirstname();

    /**
     * @param $firstname
     * @return mixed
     */
    public function setFirstname($firstname);

    /**
     * @return mixed
     */
    public function getLastname();

    /**
     * @param $lastname
     * @return mixed
     */
    public function setLastname($lastname);
}