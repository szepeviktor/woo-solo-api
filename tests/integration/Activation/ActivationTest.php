<?php

namespace Tests\WPUnit\Activation;

use Codeception\TestCase\WPTestCase;
use MadeByDenis\WooSoloApi\Core\{Plugin, PluginFactory};
use IntegrationTester;

class ActivationTest extends WPTestCase
{
    /**
     * @var IntegrationTester
     */
    protected $tester;

    public function setUp()
    {
        // Before...
        parent::setUp();

        // Your set up methods here.
    }

    public function tearDown()
    {
        // Your tear down methods here.

        // Then...
        parent::tearDown();
    }

	public function testPluginFactoryReturnsPluginInstance(IntegrationTester $tester)
	{
		$plugin = PluginFactory::create();

		$this->assertInstanceOf(Plugin::class, $plugin);
    }
}
