<?php
/**
 * Product.php
 * @author Bolbo
 */
namespace tests\units\Bolbo\Component\Product\Model;

use Bolbo\Component\Product\Model\Product as testedClass;
use mageekguy\atoum;

/**
 * Class Product
 * @package tests\units\Bolbo\Component\Product\Model
 */
class Product extends atoum\test
{
    public function testProductAfterInitialisation()
    {
        $reference     = 'mockReference';
        $mockReference = new \mock\Bolbo\Component\Product\Model\Reference($reference);

        $dateTime      = new \DateTime();
        $testedElement = new testedClass($mockReference);
        $this
            ->object($testedElement)
            ->isInstanceOf('Bolbo\Component\Product\Model\Product')
            ->class(get_class($testedElement))
            ->hasInterface('Bolbo\Component\Product\Model\ProductInterface')
            ->datetime($testedElement->getCreatedAt())
            ->hasDate($dateTime->format('Y'), $dateTime->format('m'), $dateTime->format('d'))
            ->hasDateAndTime($dateTime->format('Y'),
                $dateTime->format('m'),
                $dateTime->format('d'),
                $dateTime->format('H'),
                $dateTime->format('i'),
                $dateTime->format('s')
            )
            ->variable($testedElement->getUpdatedAt())->isNull()
            ->variable($testedElement->getDeletedAt())->isNull()
            ->boolean($testedElement->isDeleted())->isFalse()
            ->object($testedElement->getReference())->isEqualTo($mockReference)
            ->variable($testedElement->getReference())->isEqualTo($reference)
        ;
    }
}