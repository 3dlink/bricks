<?php
App::uses('Testimonio', 'Model');

/**
 * Testimonio Test Case
 */
class TestimonioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.testimonio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Testimonio = ClassRegistry::init('Testimonio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Testimonio);

		parent::tearDown();
	}

}
