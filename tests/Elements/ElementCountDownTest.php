<?php

namespace Dynamic\Elements\CountDown\Tests;

use Dynamic\Elements\CountDown\Elements\ElementCountDown;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\Dev\SapphireTest;
use SilverStripe\View\ArrayData;

/**
 * Class ElementCountDownTest
 * @package Dynamic\Elements\Tests
 */
class ElementCountDownTest extends SapphireTest
{
    /**
     * @var string
     */
    protected static $fixture_file = '../fixtures.yml';

    /**
     *
     */
    public function testGetType()
    {
        /** @var ElementCountDown $object */
        $element = $this->objFromFixture(ElementCountDown::class, 'endonly');
        $this->assertEquals($object->getType(), 'Count Down');
    }

    public function testValidate()
    {
        /** @var ElementCountDown $object */
        $element = $this->objFromFixture(ElementCountDown::class, 'endonly');
        $this->assertTrue($element->validate()->isValid());

        $element = $this->objFromFixture(ElementCountDown::class, 'invalid');
        $this->assertFalse($element->validate()->isValid());

    }

    /**
     *
     */
    public function testGetClientConfig()
    {
        /** @var ElementCountDown $object */
        $element = $this->objFromFixture(ElementCountDown::class, 'endonly');
        $this->assertInstanceOf(ArrayData::class, $element->getClientConfig());
    }

    /**
     *
     */
    public function testEncodeArrayValues()
    {
        /** @var ElementCountDown $object */
        $element = $this->objFromFixture(ElementCountDown::class, 'elapse');
        $config = $element->getClientConfig();

        $this->assertEquals(json_decode($config->getField('End')), $element->End);
        $this->assertEquals(json_decode($config->getField('Elapse')), $element->Elapse);
    }
}
