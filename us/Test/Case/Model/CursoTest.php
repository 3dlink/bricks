<?php
App::uses('Curso', 'Model');

/**
 * Curso Test Case
 *
 */
class CursoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.curso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Curso = ClassRegistry::init('Curso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Curso);

		parent::tearDown();
	}

}
