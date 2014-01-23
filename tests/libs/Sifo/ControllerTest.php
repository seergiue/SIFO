<?php

/**
 * Controller class is abstract, so we need a mock (for now).
 */
class ControllerMock extends \Sifo\Controller
{
	public function build()
	{
	}
}

/**
 * Test class for Controller.
 * Generated by PHPUnit on 2009-11-01 at 12:17:06.
 */
class ControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Controller
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new ControllerMock;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
	    $this->object = null;
    }

	/**
	 * Test object correct creation.
	 */
	public function testObjectCreation()
	{
		$this->assertTrue( $this->object instanceof \Sifo\Controller );
	}
}

