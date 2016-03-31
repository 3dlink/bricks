<?php
/**
 * Propierty Fixture
 */
class PropiertyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tenencia' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'retorno_cash' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'tir' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'status_percent' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'status_top' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'info' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'retorno_nominal' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'xls' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pdf' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'tenencia' => 'Lorem ipsum dolor sit amet',
			'retorno_cash' => 1,
			'tir' => 1,
			'status_percent' => 1,
			'status_top' => 1,
			'info' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'retorno_nominal' => 1,
			'xls' => 'Lorem ipsum dolor sit amet',
			'pdf' => 'Lorem ipsum dolor sit amet',
			'created' => '2016-03-03 23:13:31',
			'modified' => '2016-03-03 23:13:31'
		),
	);

}
