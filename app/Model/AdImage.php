<?php
App::uses('AppModel', 'Model');
/**
 * AdImage Model
 *
 * @property Ad $Ad
 */
class AdImage extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'ad_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'image_path' => array(
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

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Ad' => array(
			'className' => 'Ad',
			'foreignKey' => 'ad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
