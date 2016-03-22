<?php
App::uses('AppController', 'Controller');
/**
 * ArticleCategories Controller
 *
 * @property ArticleCategory $ArticleCategory
 * @property PaginatorComponent $Paginator
 */
class ArticleCategoriesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ArticleCategory->recursive = 0;
		$this->set('articleCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ArticleCategory->exists($id)) {
			throw new NotFoundException(__('Invalid article category'));
		}
		$options = array('conditions' => array('ArticleCategory.' . $this->ArticleCategory->primaryKey => $id));
		$this->set('articleCategory', $this->ArticleCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ArticleCategory->create();
			if ($this->ArticleCategory->save($this->request->data)) {
				$this->Flash->success(__('The article category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The article category could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ArticleCategory->exists($id)) {
			throw new NotFoundException(__('Invalid article category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ArticleCategory->save($this->request->data)) {
				$this->Flash->success(__('The article category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The article category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ArticleCategory.' . $this->ArticleCategory->primaryKey => $id));
			$this->request->data = $this->ArticleCategory->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ArticleCategory->id = $id;
		if (!$this->ArticleCategory->exists()) {
			throw new NotFoundException(__('Invalid article category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ArticleCategory->delete()) {
			$this->Flash->success(__('The article category has been deleted.'));
		} else {
			$this->Flash->error(__('The article category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
