<?php
App::uses('AppController', 'Controller');
/**
 * Papers Controller
 *
 * @property Paper $Paper
 * @property PaginatorComponent $Paginator
 */
class PapersController extends AppController {

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
		$this->Paper->recursive = 0;
		$this->set('papers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Paper->exists($id)) {
			throw new NotFoundException(__('Invalid paper'));
		}
		$options = array('conditions' => array('Paper.' . $this->Paper->primaryKey => $id));
		$this->set('paper', $this->Paper->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Paper->create();
			if ($this->Paper->save($this->request->data)) {
				$this->Flash->success(__('The paper has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The paper could not be saved. Please, try again.'));
			}
		}
		$accounts = $this->Paper->Account->find('list');
		$this->set(compact('accounts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Paper->exists($id)) {
			throw new NotFoundException(__('Invalid paper'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Paper->save($this->request->data)) {
				$this->Flash->success(__('The paper has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The paper could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Paper.' . $this->Paper->primaryKey => $id));
			$this->request->data = $this->Paper->find('first', $options);
		}
		$accounts = $this->Paper->Account->find('list');
		$this->set(compact('accounts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Paper->id = $id;
		if (!$this->Paper->exists()) {
			throw new NotFoundException(__('Invalid paper'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Paper->delete()) {
			$this->Flash->success(__('The paper has been deleted.'));
		} else {
			$this->Flash->error(__('The paper could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
