<?php
App::uses('AppController', 'Controller');
/**
 * Seokeywords Controller
 *
 * @property Seokeyword $Seokeyword
 * @property PaginatorComponent $Paginator
 */
class SeokeywordsController extends AppController {

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
		$this->layout="admin";
		$this->Seokeyword->recursive = 0;
		$this->set('seokeywords', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout="admin";
		if (!$this->Seokeyword->exists($id)) {
			throw new NotFoundException(__('Invalid seokeyword'));
		}
		$options = array('conditions' => array('Seokeyword.' . $this->Seokeyword->primaryKey => $id));
		$this->set('seokeyword', $this->Seokeyword->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		if ($this->request->is('post')) {
			$this->Seokeyword->create();
			if ($this->Seokeyword->save($this->request->data)) {
				$this->Session->setFlash('Keyword has been saved.', 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Keyword could not be saved.', 'default', array('class' => 'error_message'));
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
		$this->layout="admin";
		if (!$this->Seokeyword->exists($id)) {
			throw new NotFoundException(__('Invalid seokeyword'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Seokeyword->save($this->request->data)) {
				$this->Session->setFlash('Keyword has been saved.', 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Keyword could not be saved.', 'default', array('class' => 'error_message'));
			}
		} else {
			$options = array('conditions' => array('Seokeyword.' . $this->Seokeyword->primaryKey => $id));
			$this->request->data = $this->Seokeyword->find('first', $options);
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
		$this->Seokeyword->id = $id;
		if (!$this->Seokeyword->exists()) {
			throw new NotFoundException(__('Invalid keyword'));
		}

		if ($this->Seokeyword->delete()) {
			$this->Session->setFlash('Keyword has been deleted.', 'default', array('class' => 'success_message'));
		} else {
			$this->Session->setFlash('Keyword could not be deleted.', 'default', array('class' => 'error_message'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
