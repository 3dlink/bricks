<?php
App::uses('AppController', 'Controller');
/**
 * Faqs Controller
 *
 * @property Faq $Faq
 * @property PaginatorComponent $Paginator
 */
class FaqsController extends AppController {

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
		$this->Faq->recursive = 0;
		$this->set('faqs', $this->Paginator->paginate());
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
		if (!$this->Faq->exists($id)) {
			throw new NotFoundException(__('Invalid faq'));
		}
		$options = array('conditions' => array('Faq.' . $this->Faq->primaryKey => $id));
		$this->set('faq', $this->Faq->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		if ($this->request->is('post')) {
			$this->Faq->create();
			if ($this->Faq->save($this->request->data)) {
				$this->Session->setFlash('Faq creado.', 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Faq no creado.', 'default', array('class' => 'error_message'));
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
		if (!$this->Faq->exists($id)) {
			throw new NotFoundException(__('Invalid faq'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Faq->save($this->request->data)) {
				$this->Session->setFlash('Faq editado.', 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Faq no editado.', 'default', array('class' => 'error_message'));
			}
		} else {
			$options = array('conditions' => array('Faq.' . $this->Faq->primaryKey => $id));
			$this->request->data = $this->Faq->find('first', $options);
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
		$this->Faq->id = $id;
		if (!$this->Faq->exists()) {
			throw new NotFoundException(__('Invalid faq'));
		}
		if ($this->Faq->delete()) {
			$this->Session->setFlash('Faq eliminado.', 'default', array('class' => 'success_message'));
		} else {
			$this->Session->setFlash('Faq no eliminado.', 'default', array('class' => 'error_message'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
