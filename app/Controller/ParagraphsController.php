<?php
App::uses('AppController', 'Controller');
/**
 * Paragraphs Controller
 *
 * @property Paragraph $Paragraph
 * @property PaginatorComponent $Paginator
 */
class ParagraphsController extends AppController {

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
		$this->Paragraph->recursive = 0;
		$this->set('paragraphs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Paragraph->exists($id)) {
			throw new NotFoundException(__('Invalid paragraph'));
		}
		$options = array('conditions' => array('Paragraph.' . $this->Paragraph->primaryKey => $id));
		$this->set('paragraph', $this->Paragraph->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Paragraph->create();
			if ($this->Paragraph->save($this->request->data)) {
				$this->Flash->success(__('The paragraph has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The paragraph could not be saved. Please, try again.'));
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
		if (!$this->Paragraph->exists($id)) {
			throw new NotFoundException(__('Invalid paragraph'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Paragraph->save($this->request->data)) {
				$this->Flash->success(__('The paragraph has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The paragraph could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Paragraph.' . $this->Paragraph->primaryKey => $id));
			$this->request->data = $this->Paragraph->find('first', $options);
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
		$this->Paragraph->id = $id;
		if (!$this->Paragraph->exists()) {
			throw new NotFoundException(__('Invalid paragraph'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Paragraph->delete()) {
			$this->Flash->success(__('The paragraph has been deleted.'));
		} else {
			$this->Flash->error(__('The paragraph could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
