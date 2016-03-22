<?php
App::uses('AdCategory', 'Model');

/**
 * AdCategory Test Case
 */
class AdCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ad_category',
		'app.ad'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AdCategory = ClassRegistry::init('AdCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AdCategory);

		parent::tearDown();
	}

}
