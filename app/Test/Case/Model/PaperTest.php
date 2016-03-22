<?php
App::uses('Paper', 'Model');

/**
 * Paper Test Case
 */
class PaperTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.paper',
		'app.account'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Paper = ClassRegistry::init('Paper');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Paper);

		parent::tearDown();
	}

}
