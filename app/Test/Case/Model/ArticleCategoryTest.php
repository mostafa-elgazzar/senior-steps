<?php
App::uses('ArticleCategory', 'Model');

/**
 * ArticleCategory Test Case
 */
class ArticleCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.article_category',
		'app.article'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ArticleCategory = ClassRegistry::init('ArticleCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ArticleCategory);

		parent::tearDown();
	}

}
