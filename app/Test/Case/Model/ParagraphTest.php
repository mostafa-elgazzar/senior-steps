<?php
App::uses('Paragraph', 'Model');

/**
 * Paragraph Test Case
 */
class ParagraphTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.paragraph'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Paragraph = ClassRegistry::init('Paragraph');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Paragraph);

		parent::tearDown();
	}

}
