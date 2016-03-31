<?php
App::uses('AppController', 'Controller');
/**
 * Homes Controller
 *
 * @property Home $Home
 * @property PaginatorComponent $Paginator
 */
class HomesController extends AppController {

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
		$this->Home->recursive = 0;
		$this->set('homes', $this->Paginator->paginate());
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
		if (!$this->Home->exists($id)) {
			throw new NotFoundException(__('Invalid home'));
		}
		$options = array('conditions' => array('Home.' . $this->Home->primaryKey => $id));
		$this->set('home', $this->Home->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		if ($this->request->is('post')) {
			$this->Home->create();
			if ($this->Home->save($this->request->data)) {
				$this->Session->setFlash('Item creado.', 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
						$this->Session->setFlash('Item no creado.', 'default', array('class' => 'error_message'));
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
		if (!$this->Home->exists($id)) {
			throw new NotFoundException(__('Invalid home'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Home->save($this->request->data)) {
				$this->Session->setFlash('Item editado.', 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Item no editado.', 'default', array('class' => 'error_message'));
			}
		} else {
			$options = array('conditions' => array('Home.' . $this->Home->primaryKey => $id));
			$this->request->data = $this->Home->find('first', $options);
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
		$this->Home->id = $id;
		if (!$this->Home->exists()) {
			throw new NotFoundException(__('Invalid home'));
		}

		if ($this->Home->delete()) {
				$this->Session->setFlash('Item borrado.', 'default', array('class' => 'success_message'));
		} else {
				$this->Session->setFlash('Item no borrado.', 'default', array('class' => 'error_message'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
