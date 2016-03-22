<?php
App::uses('AppController', 'Controller');
/**
 * AdCategories Controller
 *
 * @property AdCategory $AdCategory
 * @property PaginatorComponent $Paginator
 */
class AdCategoriesController extends AppController {

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
		$this->AdCategory->recursive = 0;
		$this->set('adCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AdCategory->exists($id)) {
			throw new NotFoundException(__('Invalid ad category'));
		}
		$options = array('conditions' => array('AdCategory.' . $this->AdCategory->primaryKey => $id));
		$this->set('adCategory', $this->AdCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AdCategory->create();
			if ($this->AdCategory->save($this->request->data)) {
				$this->Flash->success(__('The ad category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The ad category could not be saved. Please, try again.'));
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
		if (!$this->AdCategory->exists($id)) {
			throw new NotFoundException(__('Invalid ad category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AdCategory->save($this->request->data)) {
				$this->Flash->success(__('The ad category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The ad category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AdCategory.' . $this->AdCategory->primaryKey => $id));
			$this->request->data = $this->AdCategory->find('first', $options);
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
		$this->AdCategory->id = $id;
		if (!$this->AdCategory->exists()) {
			throw new NotFoundException(__('Invalid ad category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AdCategory->delete()) {
			$this->Flash->success(__('The ad category has been deleted.'));
		} else {
			$this->Flash->error(__('The ad category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
