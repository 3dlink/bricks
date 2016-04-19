<?php
App::uses('PersonalPropio', 'Model');

/**
 * PersonalPropio Test Case
 *
 */
class PersonalPropioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.personal_propio',
		'app.cargo',
		'app.propio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PersonalPropio = ClassRegistry::init('PersonalPropio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PersonalPropio);

		parent::tearDown();
	}

}
