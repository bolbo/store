<?php
/**
 * Email.php
 * @author Bolbo
 */
namespace tests\units\Bolbo\Component\Person\Model;

use Bolbo\Component\Person\Model\Email as testedClass;
use mageekguy\atoum;

/**
 * Class Email
 * @package tests\units\Bolbo\Component\Person\Model
 */
class Email extends atoum\test
{

    /**
     *
     */
    public function testInvalidEmailShouldThrowException()
    {
        $email = 'this is not a valid mail';
        $this
            ->exception(
                function () use ($email) {
                    new testedClass($email);
                }
            )
            ->isInstanceOf('Assert\InvalidArgumentException')
            ->hasMessage('Value "' . $email . '" was expected to be a valid e-mail address.');
    }

    /**
     *
     */
    public function testValidEmailIsAccepted()
    {
        $email          = 'email@domain.tld';
        $email2         = 'email2@domain.tld';
        $testedElement  = new testedClass($email);
        $testedElement2 = new testedClass($email);
        $testedElement3 = new testedClass($email2);
        $this
            ->object($testedElement)
            ->isInstanceOf('Bolbo\Component\Person\Model\Email')
            ->class(get_class($testedElement))
            ->hasInterface('Bolbo\Component\Core\ValueObject')
            ->variable($testedElement->toString())
            ->isEqualTo($email)
            ->variable($testedElement)
            ->isEqualTo($email)
            ->boolean($testedElement->equals($testedElement2))
            ->isTrue()
            ->boolean($testedElement->equals($testedElement3))
            ->isFalse();
    }
}