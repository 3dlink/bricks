<?php
App::uses('AppController', 'Controller');
/**
 * Equipos Controller
 *
 * @property Equipo $Equipo
 * @property PaginatorComponent $Paginator
 */
class EquiposController extends AppController {

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
		$this->Equipo->recursive = 0;
		$this->set('equipos', $this->Paginator->paginate());
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
		if (!$this->Equipo->exists($id)) {
			throw new NotFoundException(__('Invalid equipo'));
		}
		$options = array('conditions' => array('Equipo.' . $this->Equipo->primaryKey => $id));
		$this->set('equipo', $this->Equipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		if ($this->request->is('post')) {
			$this->Equipo->create();
			if ($this->Equipo->save($this->request->data)) {
				$this->Session->setFlash('Equipo creado.', 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Equipo no creado.', 'default', array('class' => 'error_message'));
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
		if (!$this->Equipo->exists($id)) {
			throw new NotFoundException(__('Invalid equipo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Equipo->save($this->request->data)) {
				$this->Session->setFlash('Equipo editado.', 'default', array('class' => 'success_message'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Equipo no editado.', 'default', array('class' => 'error_message'));
			}
		} else {
			$options = array('conditions' => array('Equipo.' . $this->Equipo->primaryKey => $id));
			$this->request->data = $this->Equipo->find('first', $options);
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
		$this->Equipo->id = $id;
		if (!$this->Equipo->exists()) {
			throw new NotFoundException(__('Invalid equipo'));
		}
		if ($this->Equipo->delete()) {
			$this->Session->setFlash('Equipo borrado.', 'default', array('class' => 'success_message'));
		} else {
			$this->Session->setFlash('Equipo no borrado.', 'default', array('class' => 'error_message'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
