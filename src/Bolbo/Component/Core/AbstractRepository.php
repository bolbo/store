<?php
/**
 * AbstractRepository.php
 *
 * PHP version 5
 *
 * LICENSE: Eskalad
 *
 * @category  CategoryName
 * @package Bolbo\Component\Core
 * @author    laurent
 * @copyright 2014-2015 Eskalad
 * @license   http://www.eskalad.net Eskalad
 * @link      http://www.eskalad.net
 */

namespace Bolbo\Component\Core;

use PommProject\Foundation\Pomm;

/**
 * Class AbstractRepository
 * @package Bolbo\Component\Core
 */
abstract class AbstractRepository
{
    /**
     * @var Pomm
     */
    protected $pomm;

    /**
     * @var string
     */
    protected $modelClass;


    /**
     * @param Pomm $pomm
     * @param string $modelClass
     */
    public function __construct(Pomm $pomm, $modelClass)
    {
        $this->pomm       = $pomm;
        $this->modelClass = $modelClass;
    }


    /**
     * @return Pomm
     */
    public function getPomm()
    {
        return $this->pomm;
    }


    /**
     * @param Pomm $pomm
     */
    public function setPomm($pomm)
    {
        $this->pomm = $pomm;
    }


    /**
     * @return string
     */
    public function getModelClass()
    {
        return $this->modelClass;
    }


    /**
     * @param string $modelClass
     */
    public function setModelClass($modelClass)
    {
        $this->modelClass = $modelClass;
    }
}