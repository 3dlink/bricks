<?php
/**
 * PersonalPropioFixture
 *
 */
class PersonalPropioFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'personal_propio';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'cedula' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sexo' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'edad' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'contrato' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'salario' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'nomina' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'horario' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'gerencia' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'superintendencia' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha_ingreso' => array('type' => 'date', 'null' => false, 'default' => null),
		'posicion_actual' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha_ingreso_puesto' => array('type' => 'date', 'null' => false, 'default' => null),
		'experiencia' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cargo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'cedula' => 'Lorem ipsum dolor sit amet',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'sexo' => 'Lorem ipsum dolor sit amet',
			'edad' => 1,
			'contrato' => 'Lorem ipsum dolor sit amet',
			'salario' => 1,
			'nomina' => 'Lorem ipsum dolor sit amet',
			'horario' => 'Lorem ipsum dolor sit amet',
			'gerencia' => 'Lorem ipsum dolor sit amet',
			'superintendencia' => 'Lorem ipsum dolor sit amet',
			'fecha_ingreso' => '2015-12-18',
			'posicion_actual' => 'Lorem ipsum dolor sit amet',
			'fecha_ingreso_puesto' => '2015-12-18',
			'experiencia' => 'Lorem ipsum dolor sit amet',
			'cargo_id' => 1
		),
	);

}
