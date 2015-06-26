<?php
/**
 * ReferenceIsUnique.php
 * @author Bolbo
 */
namespace tests\units\Bolbo\Component\Product\Model;

use Bolbo\Component\Product\Model\ReferenceIsUnique as testedClass;
use mageekguy\atoum;

/**
 * Class ReferenceIsUnique
 * @package tests\units\Bolbo\Component\Product\Model
 */
class ReferenceIsUnique extends atoum\test
{
    /**
     * If reference already in database => productByReference return true so reference doublon ==> return false
     */
    public function testReferenceIsNotUnique()
    {
        $productRepositoryMockDoublonReference                                     = new \mock\Bolbo\Component\Product\Model\ProductRepository();
        $this->calling($productRepositoryMockDoublonReference)->productByReference = function () {
            return true;
        };

        $reference = new \mock\Bolbo\Component\Product\Model\Reference('reference');

        $testedElement = new testedClass($productRepositoryMockDoublonReference);
        $this
            ->boolean($testedElement->isSatisfiedBy($reference))
            ->isFalse();
    }

    /**
     * If reference not already in database => productByReference return false reference doublon
     */
    public function testReferenceIUnique()
    {
        $productRepositoryMockDoublonReference                                     = new \mock\Bolbo\Component\Product\Model\ProductRepository();
        $this->calling($productRepositoryMockDoublonReference)->productByReference = function () {
            return false;
        };


        $reference = new \mock\Bolbo\Component\Product\Model\Reference('reference');

        $testedElement = new testedClass($productRepositoryMockDoublonReference);
        $this
            ->boolean($testedElement->isSatisfiedBy($reference))
            ->isTrue();
    }

}