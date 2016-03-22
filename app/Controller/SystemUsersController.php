<?php
App::uses('AppController', 'Controller');
/**
 * SystemUsers Controller
 *
 * @property SystemUser $SystemUser
 * @property PaginatorComponent $Paginator
 */
class SystemUsersController extends AppController {

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
		$this->SystemUser->recursive = 0;
		$this->set('systemUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SystemUser->exists($id)) {
			throw new NotFoundException(__('Invalid system user'));
		}
		$options = array('conditions' => array('SystemUser.' . $this->SystemUser->primaryKey => $id));
		$this->set('systemUser', $this->SystemUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SystemUser->create();
			if ($this->SystemUser->save($this->request->data)) {
				$this->Flash->success(__('The system user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The system user could not be saved. Please, try again.'));
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
		if (!$this->SystemUser->exists($id)) {
			throw new NotFoundException(__('Invalid system user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SystemUser->save($this->request->data)) {
				$this->Flash->success(__('The system user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The system user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SystemUser.' . $this->SystemUser->primaryKey => $id));
			$this->request->data = $this->SystemUser->find('first', $options);
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
		$this->SystemUser->id = $id;
		if (!$this->SystemUser->exists()) {
			throw new NotFoundException(__('Invalid system user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SystemUser->delete()) {
			$this->Flash->success(__('The system user has been deleted.'));
		} else {
			$this->Flash->error(__('The system user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
