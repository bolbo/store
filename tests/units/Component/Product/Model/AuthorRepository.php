<?php
/**
 * AuthorRepository.php
 * @author Bolbo
 */
namespace tests\units\Bolbo\Component\Product\Model;

use Bolbo\Component\Product\Model\AuthorRepository as testedClass;
use mageekguy\atoum;

/**
 * Class AuthorRepository
 * @package tests\units\Bolbo\Component\Product\Model
 */
class AuthorRepository extends atoum\test
{
    public function test()
    {
        $pommMock = new \mock\PommProject\Foundation\Pomm();
        $testedElement = new testedClass($pommMock, 'database', 'test');
        var_dump($testedElement->all());
    }
}