<?php
App::uses('AppController', 'Controller');
/**
 * Seodescriptions Controller
 *
 * @property Seodescription $Seodescription
 * @property PaginatorComponent $Paginator
 */
class SeodescriptionsController extends AppController {

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
		$this->Seodescription->recursive = 0;
		$this->set('seodescriptions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Seodescription->exists($id)) {
			throw new NotFoundException(__('Invalid seodescription'));
		}
		$options = array('conditions' => array('Seodescription.' . $this->Seodescription->primaryKey => $id));
		$this->set('seodescription', $this->Seodescription->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Seodescription->create();
			if ($this->Seodescription->save($this->request->data)) {
				$this->Session->setFlash(__('The seodescription has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seodescription could not be saved. Please, try again.'));
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
		if (!$this->Seodescription->exists($id)) {
			throw new NotFoundException(__('Invalid seodescription'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Seodescription->save($this->request->data)) {
				$this->Session->setFlash('Description has been saved.', 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Description could not be saved.', 'default', array('class' => 'error_message'));
			}
		} else {
			$options = array('conditions' => array('Seodescription.' . $this->Seodescription->primaryKey => $id));
			$this->request->data = $this->Seodescription->find('first', $options);
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
		$this->Seodescription->id = $id;
		if (!$this->Seodescription->exists()) {
			throw new NotFoundException(__('Invalid seodescription'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Seodescription->delete()) {
			$this->Session->setFlash(__('The seodescription has been deleted.'));
		} else {
			$this->Session->setFlash(__('The seodescription could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
