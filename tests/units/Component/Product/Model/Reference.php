<?php
/**
 * Reference.php
 * @author Bolbo
 */
namespace tests\units\Bolbo\Component\Product\Model;

use Bolbo\Component\Product\Model\Reference as testedClass;
use mageekguy\atoum;

/**
 * Class Reference
 * @package tests\units\Bolbo\Component\Product\Model
 */
class Reference extends atoum\test
{

    /**
     *
     */
    public function testInvalidReferenceShouldThrowException()
    {
        $price = '';
        $this
            ->exception(
                function () use ($price) {
                    new testedClass($price);
                }
            )
            ->isInstanceOf('Assert\InvalidArgumentException')
            ->hasMessage('Value "' . $price . '" is not alphanumeric, starting with letters and containing only letters and numbers.');
    }

    /**
     *
     */
     public function testValidReferenceIsAccepted()
     {
         $reference  = 'Reference1';
         $reference2  = 'Reference1';
         $reference3  = 'Reference3';

         $testedElement  = new testedClass($reference);
         $testedElement2 = new testedClass($reference2);
         $testedElement3 = new testedClass($reference3);
         $this
             ->object($testedElement)
             ->isInstanceOf('Bolbo\Component\Product\Model\Reference')
             ->class(get_class($testedElement))
             ->hasInterface('Bolbo\Component\Core\ValueObject')
             ->variable($testedElement->toString())
             ->isEqualTo($reference)

             ->object($testedElement2)
             ->isInstanceOf('Bolbo\Component\Product\Model\Reference')
             ->class(get_class($testedElement2))
             ->hasInterface('Bolbo\Component\Core\ValueObject')
             ->variable($testedElement2->toString())
             ->isEqualTo($reference2)

             ->object($testedElement3)
             ->isInstanceOf('Bolbo\Component\Product\Model\Reference')
             ->class(get_class($testedElement3))
             ->hasInterface('Bolbo\Component\Core\ValueObject')
             ->variable($testedElement3->toString())
             ->isEqualTo($reference3)

             ->boolean($testedElement->equals($testedElement2))
             ->isTrue()
             ->boolean($testedElement->equals($testedElement3))
             ->isFalse();
     }
}