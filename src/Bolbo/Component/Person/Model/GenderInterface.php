<?php
/**
 * GenderInterface.php
 *
 * @author    Bolbo
 */
namespace Bolbo\Component\Person\Model;

/**
 * Interface GenderInterface
 * @package Bolbo\Component\Person\Model
 */
interface GenderInterface
{
    /**
     * @return mixed
     */
    public function getLabel();

    /**
     * @param $genderId
     * @return mixed
     */
    public function setGenderId($genderId);
}
