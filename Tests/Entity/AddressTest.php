<?php
namespace Cannibal\Bundle\AddressBundle\Tests\Entity;

use PHPUnit_Framework_TestCase;
use Cannibal\Bundle\AddressBundle\Entity\Address;

/**
 * This class tests address objects
 */
class AddressTest extends PHPUnit_Framework_TestCase
{
    /**
     * @return \Cannibal\Bundle\AddressBundle\Entity\Address
     */
    public function getObject()
    {
        return new Address();
    }

    public function dataProviderTestSetGetters()
    {
        return array(
            array('getId', null, 1234),
            array('getDesignation', 'setDesignation', "test designation"),
            array('getStreet', 'setStreet', "test street"),
            array('getCity', 'setCity', "test city"),
            array('getCounty', 'setCounty', "test county"),
            array('getCountry', 'setCountry', "test country"),
            array('getPostCode', 'setPostCode', "TT00 0TT")
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
