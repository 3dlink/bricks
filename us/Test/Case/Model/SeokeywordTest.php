<?php
App::uses('Seokeyword', 'Model');

/**
 * Seokeyword Test Case
 *
 */
class SeokeywordTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.seokeyword'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Seokeyword = ClassRegistry::init('Seokeyword');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Seokeyword);

		parent::tearDown();
	}

}
