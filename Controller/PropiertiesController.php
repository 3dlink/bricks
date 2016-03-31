<?php
App::uses('AppController', 'Controller');
/**
 * Propierties Controller
 *
 * @property Propierty $Propierty
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PropiertiesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	public $uses = array('Propierty','Upload');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout="admin";
		$this->Propierty->recursive = 0;
		$this->set('propierties', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

	public function view($id = null) {
		if (!$this->Propierty->exists($id) && $id!=1) {
			throw new NotFoundException(__('Invalid propierty'));
		}
		$this->set('propierty', $this->Propierty->findById($id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout="admin";
		if ($this->request->is('post')) {
			$this->Propierty->create();

			$val = str_replace('.','',$this->request->data['Propierty']['valor']);
			$val = str_replace(',','.',$val);
 			$val = (float) $val;
 			$this->request->data['Propierty']['valor'] = $val;

			$recaudado = str_replace('.','',$this->request->data['Propierty']['recaudado']);
			$recaudado = str_replace(',','.',$recaudado);
 			$recaudado = (float) $recaudado;
 			$this->request->data['Propierty']['recaudado'] = $recaudado;

			$status_top = str_replace('.','',$this->request->data['Propierty']['status_top']);
			$status_top = str_replace(',','.',$status_top);
 			$status_top = (float) $status_top;
 			$this->request->data['Propierty']['status_top'] = $status_top;

			$status_percent = ($recaudado*100) / $status_top;
			$this->request->data['Propierty']['status_percent'] = $status_percent;
				if($this->Propierty->saveAll($this->request->data)){
					$propierty_id = $this->Propierty->getLastInsertId();
					$uploads = array();

					if(isset($this->request->data['Propierty']['Upload'])){
						foreach ($this->request->data['Propierty']['Upload'] as $file) {
							array_push($uploads, array(
								'name' => $file['name'],
								'propierty_id' => $propierty_id
							));
						}
					if ($this->Upload->saveAll($uploads)) {
						$this->Session->setFlash('Propiedad creada.', 'default', array('class' => 'success_message'));
					return $this->redirect(array('action' => 'index'));
				} else {
							$this->Session->setFlash('Propiedad no fue creada.', 'default', array('class' => 'error_message'));
				}
					}
					$this->Session->setFlash('Propiedad creada.', 'default', array('class' => 'success_message'));
					return $this->redirect(array('action' => 'index'));
			} else {
							$this->Session->setFlash('Propiedad no fue creada 2.', 'default', array('class' => 'error_message'));
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
		if (!$this->Propierty->exists($id)) {
			throw new NotFoundException(__('Invalid propierty'));
		}
		if ($this->request->is(array('post', 'put'))) {

			$val = str_replace('.','',$this->request->data['Propierty']['valor']);
			$val = str_replace(',','.',$val);
 			$val = (float) $val;
 			$this->request->data['Propierty']['valor'] = $val;

			$recaudado = str_replace('.','',$this->request->data['Propierty']['recaudado']);
			$recaudado = str_replace(',','.',$recaudado);
 			$recaudado = (float) $recaudado;
 			$this->request->data['Propierty']['recaudado'] = $recaudado;

			$status_top = str_replace('.','',$this->request->data['Propierty']['status_top']);
			$status_top = str_replace(',','.',$status_top);
 			$status_top = (float) $status_top;
 			$this->request->data['Propierty']['status_top'] = $status_top;


			$status_percent = ($recaudado*100) / $status_top;
			$this->request->data['Propierty']['status_percent'] = $status_percent;
			if ($this->Propierty->save($this->request->data)) {
					$uploads = array();

					if(isset($this->request->data['Propierty']['Upload'])){
						foreach ($this->request->data['Propierty']['Upload'] as $file) {
							array_push($uploads, array(
								'name' => $file['name'],
								'propierty_id' => $this->request->data['Propierty']['id']
							));
						}

						if ($this->Upload->saveAll($uploads)) {
								$this->Session->setFlash('Propiedad creada.', 'default', array('class' => 'success_message'));
							return $this->redirect(array('action' => 'index'));
						} else {
									$this->Session->setFlash('Propiedad no fue creada.', 'default', array('class' => 'error_message'));
						}
					}
					$this->Session->setFlash('Propiedad creada.', 'default', array('class' => 'success_message'));
					return $this->redirect(array('action' => 'index'));
			} else {
						$this->Session->setFlash('Propiedad no fue creada.', 'default', array('class' => 'error_message'));
			}
		} else {
			$options = array('conditions' => array('Propierty.' . $this->Propierty->primaryKey => $id));
			$this->request->data = $this->Propierty->find('first', $options);
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
		$this->Propierty->id = $id;
		if (!$this->Propierty->exists()) {
			throw new NotFoundException(__('Invalid propiedad'));
		}

		$this->request->allowMethod('get', 'delete');
		if ($this->Propierty->delete()) {
					$this->Session->setFlash('Propiedad eliminada.', 'default', array('class' => 'success_message'));
		} else {
					$this->Session->setFlash('Propiedad no eliminada.', 'default', array('class' => 'error_message'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function all(){
		$conditions = array();
		if(isset($this->request->query['price_select'])){

			$price = $this->request->query['price_select'];
			$tir = $this->request->query['tir_select'];
			$ubicacion = $this->request->query['ubicacion_select'];
			$status = $this->request->query['status_select'];

			if($price > 0){
				if($price == 1){//entre US$25.000 a US$50.000
					$conditions["Propierty.valor between ? and ?"] = array(25000,50000);
				}elseif($price == 2){ //US$50.001 a US$100.000
					$conditions["Propierty.valor between ? and ?"] = array(50001,100000);
				}elseif($price == 3){ //> a US$100.001
					$conditions["Propierty.valor >="] = 100001;
				}
			}

			if($tir > 0){
				if($tir == 1){ //entre 5% a 7%  
					$conditions["Propierty.tir between ? and ?"] = array(5,7);
				}elseif($tir == 2){//8% a 10% 
					$conditions["Propierty.tir between ? and ?"] = array(8,10);
				}elseif($tir == 3){ //11%a 15%
					$conditions["Propierty.tir between ? and ?"] = array(11,15);
				}
			}

			if($status > 0){
				if($status == 1){ //abierta
					$conditions["Propierty.status_percent < "] = (float)100;
				}else{//cerrada
					$conditions["Propierty.status_percent"] = (float)100;
				}
			}

			if($ubicacion != '0'){
				$conditions["Propierty.ubicacion"] = $ubicacion;
			}

		}
		$this->Propierty->recursive = 1;
		$this->Paginator->settings = array(
      'conditions' => $conditions,
      'limit' => 4
    );
		$this->set('propierties', $this->Paginator->paginate());
	}


	public function removeIMG() {
		$this->autoRender = false;
		if(isset($_POST['img_id'])){
			$this->Upload->id = $_POST['img_id'];
			if ($this->Upload->delete()) {
				return $_POST['img_id'];
			} else {
				return 0;
			}
		}
	}

}
