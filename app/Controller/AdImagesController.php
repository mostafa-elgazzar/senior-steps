<?php
App::uses('AppController', 'Controller');
/**
 * AdImages Controller
 *
 * @property AdImage $AdImage
 * @property PaginatorComponent $Paginator
 */
class AdImagesController extends AppController {

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
		$this->AdImage->recursive = 0;
		$this->set('adImages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AdImage->exists($id)) {
			throw new NotFoundException(__('Invalid ad image'));
		}
		$options = array('conditions' => array('AdImage.' . $this->AdImage->primaryKey => $id));
		$this->set('adImage', $this->AdImage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AdImage->create();
			if ($this->AdImage->save($this->request->data)) {
				$this->Flash->success(__('The ad image has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The ad image could not be saved. Please, try again.'));
			}
		}
		$ads = $this->AdImage->Ad->find('list');
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
		if (!$this->AdImage->exists($id)) {
			throw new NotFoundException(__('Invalid ad image'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AdImage->save($this->request->data)) {
				$this->Flash->success(__('The ad image has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The ad image could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AdImage.' . $this->AdImage->primaryKey => $id));
			$this->request->data = $this->AdImage->find('first', $options);
		}
		$ads = $this->AdImage->Ad->find('list');
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
		$this->AdImage->id = $id;
		if (!$this->AdImage->exists()) {
			throw new NotFoundException(__('Invalid ad image'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AdImage->delete()) {
			$this->Flash->success(__('The ad image has been deleted.'));
		} else {
			$this->Flash->error(__('The ad image could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
