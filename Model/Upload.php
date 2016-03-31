<?php
App::uses('AppModel', 'Model');
/**
 * Upload Model
 *
 * @property Propierty $Propierty
 */
class Upload extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Propierty' => array(
			'className' => 'Propierty',
			'foreignKey' => 'propierty_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
