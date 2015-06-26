<?php
/**
 * StatusInterface.php
 *
 * @author    Bolbo
 */
namespace Bolbo\Component\Product\Model;

/**
 * Interface StatusInterface
 * @package Bolbo\Component\Product\Model
 */
interface StatusInterface
{
    /**
     * @return mixed
     */
    public function getLabel();

    /**
     * @param $statusId
     * @return mixed
     */
    public function setStatusId($statusId);
}
