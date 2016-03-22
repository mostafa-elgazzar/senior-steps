<?php
App::uses('AppController', 'Controller');
/**
 * AdContacts Controller
 *
 * @property AdContact $AdContact
 * @property PaginatorComponent $Paginator
 */
class AdContactsController extends AppController {

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
		$this->AdContact->recursive = 0;
		$this->set('adContacts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AdContact->exists($id)) {
			throw new NotFoundException(__('Invalid ad contact'));
		}
		$options = array('conditions' => array('AdContact.' . $this->AdContact->primaryKey => $id));
		$this->set('adContact', $this->AdContact->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AdContact->create();
			if ($this->AdContact->save($this->request->data)) {
				$this->Flash->success(__('The ad contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The ad contact could not be saved. Please, try again.'));
			}
		}
		$ads = $this->AdContact->Ad->find('list');
		$this->set(compact('ads'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AdContact->exists($id)) {
			throw new NotFoundException(__('Invalid ad contact'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AdContact->save($this->request->data)) {
				$this->Flash->success(__('The ad contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The ad contact could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AdContact.' . $this->AdContact->primaryKey => $id));
			$this->request->data = $this->AdContact->find('first', $options);
		}
		$ads = $this->AdContact->Ad->find('list');
		$this->set(compact('ads'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AdContact->id = $id;
		if (!$this->AdContact->exists()) {
			throw new NotFoundException(__('Invalid ad contact'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AdContact->delete()) {
			$this->Flash->success(__('The ad contact has been deleted.'));
		} else {
			$this->Flash->error(__('The ad contact could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
