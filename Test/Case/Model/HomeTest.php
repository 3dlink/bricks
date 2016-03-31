<?php
App::uses('Home', 'Model');

/**
 * Home Test Case
 */
class HomeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.home'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Home = ClassRegistry::init('Home');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Home);

		parent::tearDown();
	}

}
