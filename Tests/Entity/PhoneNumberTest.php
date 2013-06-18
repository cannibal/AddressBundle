<?php
namespace Cannibal\Bundle\AddressBundle\Tests\Entity;

use Cannibal\Bundle\AddressBundle\Entity\PhoneNumber;

use PHPUnit_Framework_TestCase;

/**
 * Created by JetBrains PhpStorm.
 * User: adam
 * Date: 29/06/2012
 * Time: 14:46
 * To change this template use File | Settings | File Templates.
 */
class PhoneNumberTest extends PHPUnit_Framework_TestCase
{
    /**
     * @return \Cannibal\Bundle\AddressBundle\Entity\PhoneNumber
     */
    public function getObject()
    {
        return new PhoneNumber();
    }

    public function dataProviderTestSetGetters()
    {
        return array(
            array('getId',null, null),
            array('getCountryCode','setCountryCode', "+44"),
            array('getNumber','setNumber', "12345890"),
            array('getNumberCanonical','setNumberCanonical', "12345890"),
            array('getTemplate','setTemplate', "12345890"),
        );
    }

    /**
     * @param $getter
     * @param $setter
     * @param $expected
     * @dataProvider dataProviderTestSetGetters
     */
    public function testSetGetters($getter, $setter, $expected)
    {
        $test = $this->getObject();

        $this->assertNull($test->$getter());

        if(isset($setter)) {
            $test->$setter($expected);

            $this->assertEquals($expected, $test->$getter());
        }
    }
}
