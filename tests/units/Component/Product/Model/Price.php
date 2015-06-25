<?php
/**
 * Price.php
 * @author Bolbo
 */
namespace tests\units\Bolbo\Component\Product\Model;

use Bolbo\Component\Product\Model\Price as testedClass;
use mageekguy\atoum;

/**
 * Class Price
 * @package tests\units\Bolbo\Component\Product\Model
 */
class Price extends atoum\test
{

    /**
     *
     */
    public function testInvalidPriceShouldThrowException()
    {
        $price  = 'this is not a valid float';
        $price2 = 0;
        $price3 = -5;
        $this
            ->exception(
                function () use ($price) {
                    new testedClass($price);
                }
            )
            ->isInstanceOf('Assert\InvalidArgumentException')
            ->hasMessage('Value "' . $price . '" is not a float.')
            ->exception(
                function () use ($price2) {
                    new testedClass($price2);
                }
            )
            ->isInstanceOf('Assert\InvalidArgumentException')
            ->hasMessage('Value "' . $price2 . '" is not a float.')
            ->exception(
                function () use ($price3) {
                    new testedClass($price3);
                }
            )
            ->isInstanceOf('Assert\InvalidArgumentException')
            ->hasMessage('Value "' . $price3 . '" is not a float.');
    }

    /**
     *
     */
    public function testValidFloatIsAccepted()
    {
        $price  = 15.5;
        $price2 = 0.0;
        $price3 = -5.9;
        $price4 = -5.9;

        $testedElement  = new testedClass($price);
        $testedElement2 = new testedClass($price2);
        $testedElement3 = new testedClass($price3);
        $testedElement4 = new testedClass($price4);
        $this
            ->object($testedElement)
            ->isInstanceOf('Bolbo\Component\Product\Model\Price')
            ->class(get_class($testedElement))
            ->hasInterface('Bolbo\Component\Core\ValueObject')
            ->variable($testedElement->toString())
            ->isEqualTo($price)

            ->object($testedElement2)
            ->isInstanceOf('Bolbo\Component\Product\Model\Price')
            ->class(get_class($testedElement2))
            ->hasInterface('Bolbo\Component\Core\ValueObject')
            ->variable($testedElement2->toString())
            ->isEqualTo($price2)

            ->object($testedElement3)
            ->isInstanceOf('Bolbo\Component\Product\Model\Price')
            ->class(get_class($testedElement3))
            ->hasInterface('Bolbo\Component\Core\ValueObject')
            ->variable($testedElement3->toString())
            ->isEqualTo($price3)

            ->object($testedElement4)
            ->isInstanceOf('Bolbo\Component\Product\Model\Price')
            ->class(get_class($testedElement4))
            ->hasInterface('Bolbo\Component\Core\ValueObject')
            ->variable($testedElement4->toString())
            ->isEqualTo($price4)

            ->boolean($testedElement3->equals($testedElement4))
            ->isTrue()
            ->boolean($testedElement->equals($testedElement3))
            ->isFalse();
    }
}