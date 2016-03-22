<?php
App::uses('AdImage', 'Model');

/**
 * AdImage Test Case
 */
class AdImageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ad_image',
		'app.ad'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AdImage = ClassRegistry::init('AdImage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AdImage);

		parent::tearDown();
	}

}
