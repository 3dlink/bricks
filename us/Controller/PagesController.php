<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Home','Testimonio','Equipo','Faq','Work','Video','Seodescription','Seokeyword');

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));

		$this->set('slider_ppal',$this->Home->find('all'));
		$this->set('testimonios',$this->Testimonio->find('all'));
		$this->set('videos',$this->Video->find('all'));
		$this->set('seodescription',$this->Seodescription->find('first'));
		$keyword = $this->Seokeyword->find('all');
		// $keyword = "";
		// foreach ($keywords as $key => $value) {
		// 	$keyword = $keyword.$value['Seokeyword']['keyword'].",";
		// }
		// $keyword = substr($keyword, 0,-1);  
		$this->set('keywords',$keyword);

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}


	public function nosotros(){
		$this->set('seodescription',$this->Seodescription->find('first'));
		$keywords = $this->Seokeyword->find('all');
		// $keyword = "";
		// foreach ($keywords as $key => $value) {
		// 	$keyword = $keyword.$value['Seokeyword']['keyword'].",";
		// }
		// $keyword = substr($keyword, 0,-1);  
		$this->set('keywords',$keywords);

		$this->set('equipos',$this->Equipo->find('all'));
	}

	public function contacto(){
		$this->set('seodescription',$this->Seodescription->find('first'));
		$keywords = $this->Seokeyword->find('all');
		// $keyword = "";
		// foreach ($keywords as $key => $value) {
		// 	$keyword = $keyword.$value['Seokeyword']['keyword'].",";
		// }
		// $keyword = substr($keyword, 0,-1);  
		$this->set('keywords',$keywords);

		
	}

	public function como_funciona(){
		$this->set('seodescription',$this->Seodescription->find('first'));
		$keywords = $this->Seokeyword->find('all');
		// $keyword = "";
		// foreach ($keywords as $key => $value) {
		// 	$keyword = $keyword.$value['Seokeyword']['keyword'].",";
		// }
		// $keyword = substr($keyword, 0,-1);  
		$this->set('keywords',$keywords);

		$this->set('work',$this->Work->find('first'));
	}

	public function preguntas_frecuentes(){
		$this->set('seodescription',$this->Seodescription->find('first'));
		$keywords = $this->Seokeyword->find('all');
		// $keyword = "";
		// foreach ($keywords as $key => $value) {
		// 	$keyword = $keyword.$value['Seokeyword']['keyword'].",";
		// }
		// $keyword = substr($keyword, 0,-1);  
		$this->set('keywords',$keywords);

		$this->set('faqs',$this->Faq->find('all'));
	}

	public function dashboard(){
		$this->layout="admin";
	}

	public function upload($action = 0) {
		$this->autoRender = false;
		if($action!=0){

			if($action == 1){

				$time = strtotime ( "now" );
				$targetFolder = '../webroot/files/'; // Relative to the root
				if (! empty ( $_FILES )) {
					$tempFile = $_FILES ['file'] ['tmp_name'];
					$targetPath = $targetFolder;
					// Validate the file type
					$fileTypes = array (
							'jpg',
							'jpeg',
							'gif',
							'png',
							'JPG',
							'JPEG',
							'GIF',
							'PNG'
					); // File extensions
					$fileParts = pathinfo ( $_FILES ['file'] ['name'] );
					if (in_array ( $fileParts ['extension'], $fileTypes )) {
						$name = "img" . $time . $this->__randomStr ( 3 );
						$targetFile = rtrim ( $targetPath, '/' ) . '/' . $name . "." . $fileParts ['extension'];
						if (move_uploaded_file ( $tempFile, $targetFile )) {
							$namepath = $name . "." . $fileParts ['extension'];
							return json_encode ($namepath );
						} else {
							return json_encode ( array (
									false,
									false 
							) );
						}
					} else {
						echo 'Imagen no valida';
					}
				}

			}elseif($action == 2){

				$time = strtotime ( "now" );
				$targetFolder = '../webroot/files/'; // Relative to the root
				if (! empty ( $_FILES )) {
					$tempFile = $_FILES ['file'] ['tmp_name'];
					$targetPath = $targetFolder;
					// Validate the file type
					$fileTypes = array ('xls'); // File extensions
					$fileParts = pathinfo ( $_FILES ['file'] ['name'] );
					if (in_array ( $fileParts ['extension'], $fileTypes )) {
						$name = $_FILES ['file'] ['name'];
						$targetFile = rtrim ( $targetPath, '/' ) . '/' . $name;
						if (move_uploaded_file ( $tempFile, $targetFile )) {
							$namepath = $name;
							return json_encode ($namepath );
						} else {
							return json_encode ( array (
									false,
									false 
							) );
						}
					} else {
						echo 'archivo no valido';
					}
				}

			}elseif($action == 3){

				$time = strtotime ( "now" );
				$targetFolder = '../webroot/files/'; // Relative to the root
				if (! empty ( $_FILES )) {
					$tempFile = $_FILES ['file'] ['tmp_name'];
					$targetPath = $targetFolder;
					// Validate the file type
					$fileTypes = array ('pdf'); // File extensions
					$fileParts = pathinfo ( $_FILES ['file'] ['name'] );
					if (in_array ( $fileParts ['extension'], $fileTypes )) {
						$name = $_FILES ['file'] ['name'];
						$targetFile = rtrim ( $targetPath, '/' ) . '/' . $name;
						if (move_uploaded_file ( $tempFile, $targetFile )) {
							$namepath = $name;
							return json_encode ($namepath );
						} else {
							return json_encode ( array (
									false,
									false 
							) );
						}
					} else {
						echo 'archivo no valido';
					}
				}

			}elseif($action == 4){
				$time = strtotime ( "now" );
				$targetFolder = '../webroot/files/'; // Relative to the root
				if (! empty ( $_FILES )) {
					$tempFile = $_FILES ['file'] ['tmp_name'];
					$targetPath = $targetFolder;
					// Validate the file type
					$fileTypes = array (
							'mp4',
							'3gp',
							'fvl',
							'mov',
							'avi',
							'vmw',
							'swf'
					); // File extensions
					$fileParts = pathinfo ( $_FILES ['file'] ['name'] );
					if (in_array ( $fileParts ['extension'], $fileTypes )) {
						$name = "video" . $time . $this->__randomStr ( 3 );
						$targetFile = rtrim ( $targetPath, '/' ) . '/' . $name . "." . $fileParts ['extension'];
						if (move_uploaded_file ( $tempFile, $targetFile )) {
							$namepath = $name . "." . $fileParts ['extension'];
							return json_encode ($namepath );
						} else {
							return json_encode ( array (
									false,
									false 
							) );
						}
					} else {
						echo 'video no valido';
					}
				}
			}

		}else{
			echo 'error';
		}
	}

	function __randomStr($length) {
		$str = '';
		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	
		$size = strlen ( $chars );
		for($i = 0; $i < $length; $i ++) {
			$str .= $chars [rand ( 0, $size - 1 )];
		}
	
		return $str;
	}
}
