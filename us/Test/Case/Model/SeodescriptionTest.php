<?php
App::uses('Seodescription', 'Model');

/**
 * Seodescription Test Case
 *
 */
class SeodescriptionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.seodescription'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Seodescription = ClassRegistry::init('Seodescription');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Seodescription);

		parent::tearDown();
	}

}
