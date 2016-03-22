<?php
App::uses('AdContact', 'Model');

/**
 * AdContact Test Case
 */
class AdContactTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ad_contact',
		'app.ad'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AdContact = ClassRegistry::init('AdContact');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AdContact);

		parent::tearDown();
	}

}
