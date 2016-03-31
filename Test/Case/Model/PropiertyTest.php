<?php
App::uses('Propierty', 'Model');

/**
 * Propierty Test Case
 */
class PropiertyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.propierty',
		'app.upload'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Propierty = ClassRegistry::init('Propierty');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Propierty);

		parent::tearDown();
	}

}
