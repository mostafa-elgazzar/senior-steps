<?php
App::uses('AppModel', 'Model');
/**
 * Paragraph Model
 *
 */
class Paragraph extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'body' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
