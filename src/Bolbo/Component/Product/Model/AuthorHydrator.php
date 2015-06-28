<?php
/**
 * AuthorHydrator.php
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


class AuthorHydrator
{
    public function extract(Author $author)
    {

    }

    public function hydrate(array $data, Author $object)
    {
        $object->setCreatedAt($data['created_at']);
        $object->setUpdatedAt($data['updated_at']);
        $object->setDeletedAt($data['deleted_at']);
        //$object->setGender($data['gender']);
        $object->setFirstname($data['firstname']);
        $object->setLastname($data['lastname']);
        $object->setStreet($data['street']);
        $object->setStreet2($data['street2']);
        $object->setPostcode($data['postcode']);
        $object->setCity($data['city']);
        $object->setCountry($data['country_id']);

        return $object;
    }
}