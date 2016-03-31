<?php
App::uses('AppController', 'Controller');
/**
 * Testimonios Controller
 *
 * @property Testimonio $Testimonio
 * @property PaginatorComponent $Paginator
 */
class TestimoniosController extends AppController {

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
		$this->Testimonio->recursive = 0;
		$this->set('testimonios', $this->Paginator->paginate());
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
		if (!$this->Testimonio->exists($id)) {
			throw new NotFoundException(__('Invalid testimonio'));
		}
		$options = array('conditions' => array('Testimonio.' . $this->Testimonio->primaryKey => $id));
		$this->set('testimonio', $this->Testimonio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		if ($this->request->is('post')) {
			$this->Testimonio->create();
			if ($this->Testimonio->save($this->request->data)) {
				$this->Session->setFlash('Testimonio creado.', 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Testimonio no creado.', 'default', array('class' => 'error_message'));
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
		if (!$this->Testimonio->exists($id)) {
			throw new NotFoundException(__('Invalid testimonio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Testimonio->save($this->request->data)) {
				$this->Session->setFlash('Testimonio editado.', 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Testimonio no editado.', 'default', array('class' => 'error_message'));
			}
		} else {
			$options = array('conditions' => array('Testimonio.' . $this->Testimonio->primaryKey => $id));
			$this->request->data = $this->Testimonio->find('first', $options);
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
		$this->Testimonio->id = $id;
		if (!$this->Testimonio->exists()) {
			throw new NotFoundException(__('Invalid testimonio'));
		}
		if ($this->Testimonio->delete()) {
				$this->Session->setFlash('Testimonio eliminado.', 'default', array('class' => 'success_message'));
		} else {
				$this->Session->setFlash('Testimonio no eliminado.', 'default', array('class' => 'error_message'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
