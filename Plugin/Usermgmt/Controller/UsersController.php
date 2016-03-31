<?php
/*
	This file is part of UserMgmt.

	Author: Chetan Varshney (http://ektasoftwares.com)

	UserMgmt is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	UserMgmt is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
*/

App::uses('UserMgmtAppController', 'Usermgmt.Controller');

class UsersController extends UserMgmtAppController {
	/**
	 * This controller uses following models
	 *
	 * @var array
	 */
	public $uses = array('Usermgmt.User', 'Usermgmt.UserGroup', 'Usermgmt.LoginToken');
	public $components = array('Paginator');
	/**
	 * Called before the controller action.  You can use this method to configure and customize components
	 * or perform logic that needs to happen before each controller action.
	 *
	 * @return void
	 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->User->userAuth=$this->UserAuth;
	}
	/**
	 * Used to display all users by Admin
	 *
	 * @access public
	 * @return array
	 */
	public function index() {
		$this->User->unbindModel( array('hasMany' => array('LoginToken')));
		if(isset($this->request->query['filtro'])){		
			$filtro = $this->request->query['filtro'];		
			if(!empty($filtro)){
				$this->Paginator->settings = array(
						'conditions' => array(
								'OR'=>array(
										'User.username LIKE "%'.$filtro.'%"',
										'User.first_name LIKE "%'.$filtro.'%"',
										'User.last_name LIKE "%'.$filtro.'%"'
								)								
						)
				);
			}		
		}
		/*$users=$this->User->find('all', array('order'=>'User.id desc'));
		$this->set('users', $users);*/
		//$this->User->recursive = 0;
		$user=$this->UserAuth->getUser();
		if($user['User']['user_group_id']==1){
			$this->set('users', $this->Paginator->paginate());
		}else{
			$this->Paginator->settings = array(
						'conditions' => array(
										'User.entity_id' => $user['User']['entity_id']						
						)
				);

			$this->set('users', $this->Paginator->paginate());
		}
		}
	/**
	 * Used to display detail of user by Admin
	 *
	 * @access public
	 * @param integer $userId user id of user
	 * @return array
	 */
	public function viewUser($userId=null) {
		if (!empty($userId)) {
			$user_=$this->UserAuth->getUser();
			$user = $this->User->read(null, $userId);
			if(isset($user['User']['id'])){
				if($user['User']['id'] == $user_['User']['id'])
					$this->set('user', $user);
				else
					$this->redirect('/viewUser/'.$user_['User']['id']);
			}else{
					$this->redirect('/viewUser/'.$user_['User']['id']);
			}
		} else {
			$this->redirect('/');
		}
	}
	/**
	 * Used to display detail of user by user
	 *
	 * @access public
	 * @return array
	 */
	public function myprofile() {
		$userId = $this->UserAuth->getUserId();
		$user = $this->User->read(null, $userId);
		$this->set('user', $user);
	}
	/**
	 * Used to logged in the site
	 *
	 * @access public
	 * @return void
	 */
	public function login() {
		if ($this->request -> isPost()) {
			 $this->User->set($this->data);
			 if($this->User->LoginValidate()) {
				$email  = $this->data['User']['email'];
				$password = $this->data['User']['password'];

				$user = $this->User->findByUsername($email);
				if (empty($user)) {
					$user = $this->User->findByEmail($email);
					if (empty($user)) {
						$this->Session->setFlash('Usuario o contraseña incorrecta, inténtelo nuevamente.', 'default', array('class' => 'error_message'));
						return;
					}
				}
				// check for inactive account
				if ($user['User']['id'] != 1 and $user['User']['active']==0) {
						$this->Session->setFlash('Usuario inactivo.', 'default', array('class' => 'error_message'));
						return;
				}
				// check for verified account
				if ($user['User']['id'] != 1 and $user['User']['email_verified']==0) {
						$this->Session->setFlash('Usuario inactivo.', 'default', array('class' => 'error_message'));
						return;
				}

				if(empty($user['User']['salt'])) {
					$hashed = md5($password);
				} else {
					$hashed = $this->UserAuth->makePassword($password, $user['User']['salt']);
				}

				if ($user['User']['password'] === $hashed) {
					if(empty($user['User']['salt'])) {
						$salt=$this->UserAuth->makeSalt();
						$user['User']['salt']=$salt;
						$user['User']['password']=$this->UserAuth->makePassword($password, $salt);
						$this->User->save($user,false);
					}
					$this->UserAuth->login($user);
					$remember = (!empty($this->data['User']['remember']));
					if ($remember) {
						$this->UserAuth->persist('2 weeks');
					}
					$OriginAfterLogin=$this->Session->read('Usermgmt.OriginAfterLogin');
					$this->Session->delete('Usermgmt.OriginAfterLogin');
					// $redirect = (!empty($OriginAfterLogin)) ? $OriginAfterLogin : LOGIN_REDIRECT_URL;
					$groupid = $this->UserAuth->getGroupId();
					
					$_SESSION["avatar"]=$user['User']['avatar'];
					if($groupid == 1){
						$this->redirect('/dashboard');
					}else{
						$this->redirect('/');
					}
				} else {				
					$this->Session->setFlash('Usuario o contraseña incorrecta, inténtelo nuevamente.', 'default', array('class' => 'error_message'));
					return;
				}
			 }
		}
	}
	/**
	 * Used to logged out from the site
	 *
	 * @access public
	 * @return void
	 */
	public function logout() {
		$_SESSION["avatar"] = 'default.png';
		$this->UserAuth->logout();
		$this->redirect('/');
	}
	/**
	 * Used to register on the site
	 *
	 * @access public
	 * @return void
	 */
	public function register() {
		$userId = $this->UserAuth->getUserId();
		if ($userId) {
			$this->redirect("/dashboard");
		}
		if (SITE_REGISTRATION) {
			$userGroups=$this->UserGroup->getGroupsForRegistration();
			$this->set('userGroups', $userGroups);
			if ($this->request -> isPost()) {
				$this->User->set($this->data);
				if ($this->User->RegisterValidate()) {
					if (!isset($this->data['User']['user_group_id'])) {
						$this->request->data['User']['user_group_id']=DEFAULT_GROUP_ID;
					} elseif (!$this->UserGroup->isAllowedForRegistration($this->data['User']['user_group_id'])) {
						$this->Session->setFlash(__('Please select correct register as'));
						return;
					}
					if (!EMAIL_VERIFICATION) {
						$this->request->data['User']['active']=1;
					}
					$salt=$this->UserAuth->makeSalt();
					$this->request->data['User']['salt']=$salt;
					$this->request->data['User']['password'] = $this->UserAuth->makePassword($this->request->data['User']['password'], $salt);
					// $this->request->data['User']['active'] = 1;
					$this->User->save($this->request->data,false);
					$userId=$this->User->getLastInsertID();
					$user = $this->User->findById($userId);
					if (EMAIL_VERIFICATION && !EMAIL_VERIFICATION) {
						$this->User->sendRegistrationMail($user);
					}
					
					$this->log('EMAIL_VERIFICATION: '.EMAIL_VERIFICATION);

					if (EMAIL_VERIFICATION) {
						$this->User->sendVerificationMail($user);
					}
					if (isset($this->request->data['User']['active']) && $this->request->data['User']['active']) {
						$this->UserAuth->login($user);
						$this->redirect('/');
					} else {
						$this->Session->setFlash('Por favor revise su correo y confirme su registro.', 'default', array('class' => 'success_message'));
						$this->redirect('/');
					}
				}
			}
		} else {
			$this->Session->setFlash(__('Sorry new registration is currently disabled, please try again later'));
			$this->redirect('/login');
		}
	}


	/**
	 * Used to change the password by user
	 *
	 * @access public
	 * @return void
	 */
	public function changePassword() {
		$userId = $this->UserAuth->getUserId();
		if ($this->request -> isPost()) {
			$this->User->set($this->data);
			if ($this->User->RegisterValidate()) {
				$user=array();
				$user['User']['id']=$userId;
				$salt=$this->UserAuth->makeSalt();
				$user['User']['salt'] = $salt;
				$user['User']['password'] = $this->UserAuth->makePassword($this->request->data['User']['password'], $salt);
				$this->User->save($user,false);
				$this->LoginToken->deleteAll(array('LoginToken.user_id'=>$userId), false);
				$this->Session->setFlash('Contraseña cambiada con éxito.', 'default', array('class' => 'success_message'));
				$this->redirect('/editUser/'.$userId);
			}
		}
	}
	/**
	 * Used to change the user password by Admin
	 *
	 * @access public
	 * @param integer $userId user id of user
	 * @return void
	 */
	public function changeUserPassword($userId=null) {
		if (!empty($userId)) {
			$name=$this->User->getNameById($userId);
			$this->set('name', $name);
			if ($this->request -> isPost()) {
				$this->User->set($this->data);
				if($this->User->RegisterValidate()) {
					$user=array();
					$user['User']['id']=$userId;
					$salt=$this->UserAuth->makeSalt();
					$user['User']['salt'] = $salt;
					$user['User']['password'] = $this->UserAuth->makePassword($this->request->data['User']['password'], $salt);
					$this->User->save($user,false);
					$this->LoginToken->deleteAll(array('LoginToken.user_id'=>$userId), false);
					$this->Session->setFlash('Contraseña cambiada con éxito.', 'default', array('class' => 'success_message'));
					$this->redirect('/editUser/');
				}
			}
		} else {
			$this->redirect('/allUsers');
		}
	}
	/**
	 * Used to add user on the site by Admin
	 *
	 * @access public
	 * @return void
	 */
	public function addUser() {
		$userGroups=$this->UserGroup->getGroups();
		$entities=$this->__getEntities();
		$this->set('entities', $entities);
		$this->set('userGroups', $userGroups);
		if ($this->request -> isPost()) {
			$this->User->set($this->data);			
			if ($this->User->RegisterValidate()) {				
				$this->request->data['User']['username']=$this->request->data['User']['email'];
				$this->request->data['User']['email_verified']=1;
				$this->request->data['User']['active']=1;
				$salt=$this->UserAuth->makeSalt();
				$this->request->data['User']['salt'] = $salt;
				$this->request->data['User']['password'] = $this->UserAuth->makePassword($this->request->data['User']['password'], $salt);
				$this->User->save($this->request->data,false);
				$this->Session->setFlash('El usuario se agregó correctamente.', 'default', array('class' => 'success_message'));
				$this->redirect('/allUsers');
			}
		}
	}
	/**
	 * Used to edit user on the site by Admin
	 *
	 * @access public
	 * @param integer $userId user id of user
	 * @return void
	 */
	public function editUser($userId=null) {
		if (!empty($userId)) {
			$userGroups=$this->UserGroup->getGroups();
			if ($this->request -> isPut()) {
				$this->User->set($this->data);
				if ($this->User->RegisterValidate()) {
					$this->request->data['User']['username']=$this->request->data['User']['email'];
					//debug($this->request->data);
					if($this->User->save($this->request->data)){
						$_SESSION["avatar"]=$this->request->data['User']['avatar'];
						$this->Session->setFlash('El usuario se actualizó con éxito.', 'default', array('class' => 'success_message'));
						$this->redirect('/');
					}else{
						$this->Session->setFlash('Error actualizando al usuario, por favor intente de nuevo.', 'default', array('class' => 'error_message'));
					}
					
				}
			} else {
				$this->request->data=null;
				$user_=$this->UserAuth->getUser();
				$user = $this->User->read(null, $userId);
				if(isset($user['User']['id'])){
					if($user['User']['id'] == $user_['User']['id'])
					$this->request->data = $user;
					else
						$this->redirect('/editUser/'.$user_['User']['id']);
				}else{
						$this->redirect('/editUser/'.$user_['User']['id']);
				}
			}
		} else {
			$this->redirect('/');
		}
	}
	/**
	 * Used to delete the user by Admin
	 *
	 * @access public
	 * @param integer $userId user id of user
	 * @return void
	 */
	public function deleteUser($userId = null) {
		if (!empty($userId)) {
			if ($this->request -> isPost()) {
				if ($this->User->delete($userId, false)) {
					$this->LoginToken->deleteAll(array('LoginToken.user_id'=>$userId), false);
					$this->Session->setFlash(__('Usuario se ha eliminado con éxito'));
				}
			}
			$this->redirect('/allUsers');
		} else {
			$this->redirect('/allUsers');
		}
	}
	/**
	 * Used to show dashboard of the user
	 *
	 * @access public
	 * @return array
	 */
	public function dashboard() {
		$userId=$this->UserAuth->getUserId();
		$user = $this->User->findById($userId);
		$this->set('user', $user);
	}
	/**
	 * Used to activate or deactivate user by Admin
	 *
	 * @access public
	 * @param integer $userId user id of user
	 * @param integer $active active or inactive
	 * @return void
	 */
	public function makeActiveInactive($userId = null, $active=0) {
		if (!empty($userId)) {
			$user=array();
			$user['User']['id']=$userId;
			$user['User']['active']=($active) ? 1 : 0;
			$this->User->save($user,false);
			if($active) {
				$this->Session->setFlash('El usuario se activó con éxito.', 'default', array('class' => 'success_message'));
			} else {
				$this->Session->setFlash('El usuario se desactivó con éxito.', 'default', array('class' => 'success_message'));
			}
		}
		$this->redirect('/allUsers');
	}
	/**
	 * Used to verify email of user by Admin
	 *
	 * @access public
	 * @param integer $userId user id of user
	 * @return void
	 */
	public function verifyEmail($userId = null) {
		if (!empty($userId)) {
			$user=array();
			$user['User']['id']=$userId;
			$user['User']['email_verified']=1;
			$this->User->save($user,false);
			$this->Session->setFlash('Correo electrónico del usuario se verifico con éxito.', 'default', array('class' => 'success_message'));
		}
		$this->redirect('/allUsers');
	}
	/**
	 * Used to show access denied page if user want to view the page without permission
	 *
	 * @access public
	 * @return void
	 */
	public function accessDenied() {

	}
	/**
	 * Used to verify user's email address
	 *
	 * @access public
	 * @return void
	 */
	public function userVerification() {
		if (isset($_GET['ident']) && isset($_GET['activate'])) {
			$userId= $_GET['ident'];
			$activateKey= $_GET['activate'];
			$user = $this->User->read(null, $userId);
			if (!empty($user)) {
				if (!$user['User']['email_verified']) {
					$password = $user['User']['password'];
					$theKey = $this->User->getActivationKey($password);
					if ($activateKey==$theKey) {
						$user['User']['email_verified']=1;
						$user['User']['active']=1;
						$this->User->save($user,false);
						if (SEND_REGISTRATION_MAIL && EMAIL_VERIFICATION) {
							$this->User->sendRegistrationMail($user);
						}
						$this->Session->setFlash('Gracias, tu cuenta ha sido activada.', 'default', array('class' => 'success_message'));
					}
				} else {
					$this->Session->setFlash('Gracias, tu cuenta ha sido activada.', 'default', array('class' => 'success_message'));
				}
			} else {
				$this->Session->setFlash('Lo sentimos algo salió mal , por favor haga clic en el enlace de nuevo.', 'default', array('class' => 'error_message'));
			}
		} else {
			$this->Session->setFlash('Lo sentimos algo salió mal , por favor haga clic en el enlace de nuevo.', 'default', array('class' => 'error_message'));
		}
		$this->redirect('/login');
	}
	/**
	 * Used to send forgot password email to user
	 *
	 * @access public
	 * @return void
	 */
	public function forgotPassword() {
		if ($this->request -> isPost()) {
			$this->User->set($this->data);
			if ($this->User->LoginValidate()) {
				$email  = $this->data['User']['email'];
				$user = $this->User->findByUsername($email);
				if (empty($user)) {
					$user = $this->User->findByEmail($email);
					if (empty($user)) {
						$this->Session->setFlash('Nombre de usuario o Correo electrónico incorrecto.', 'default', array('class' => 'error_message'));
						return;
					}
				}
				
				$userId=$user['User']['id'];
				$fromNameConfig = 'Bricks USA';
				$from = array('info@bricksusa.com');
				$to = $user['User']['email'];
				$subject = 'Bricks USA'.': Solicitud para restablecer la contraseña';
				$activate_key = $this->User->getActivationKey($user['User']['password']);
				$link = Router::url("/activatePassword?ident=$userId&activate=$activate_key",true);
				$content= "Bienvenido ".$user['User']['first_name'].", vamos a ayudarlo a iniciado sesión
						Ha solicitado el restablecimiento de su contraseña en ".'Bricks USA'.". Por favor, haga click en el siguiente enlace para restablecer tu contraseña:
						".$link."
						Si el enlace anterior no funciona por favor, copie y pegue el enlace URL (arriba) en la barra de direcciones del navegador para llegar a la página para restablecer la contraseña
						Elija una contraseña que pueda recordar y por favor mantenerla segura.
						Gracias,\n".
						'Bricks USA';

						if($this->__enviar_correo($from,$to,$subject,$content)){
							$this->Session->setFlash('Por favor verifique su correo electrónico para el restablecimiento de contraseña.', 'default', array('class' => 'success_message'));
							$this->redirect('/login');
						}else{
							$this->Session->setFlash('Ha ocurrido un error, inténtelo nuevamente.', 'default', array('class' => 'error_message'));
						}
			}
		}
	}

	function __enviar_correo($from, $to, $subject, $contenido){
		
		$Email = new CakeEmail();
		if($Email->config('smtp')
		->to($to)
		->subject($subject)
		->from($from)
		->template('default')
		->emailFormat('html')
		->send($contenido)){
			return true;
		}
	}	

	/**
	 *  Used to reset password when user comes on the by clicking the password reset link from their email.
	 *
	 * @access public
	 * @return void
	 */
	public function activatePassword() {
		if ($this->request -> isPost()) {
			if (!empty($this->data['User']['ident']) && !empty($this->data['User']['activate'])) {
				$this->set('ident',$this->data['User']['ident']);
				$this->set('activate',$this->data['User']['activate']);
				$this->User->set($this->data);
				if ($this->User->RegisterValidate()) {
					$this->log('holis 1');
					$userId= $this->data['User']['ident'];
					$activateKey= $this->data['User']['activate'];
					$user = $this->User->read(null, $userId);
					if (!empty($user)) {
					$this->log('holis 2');
						$password = $user['User']['password'];
						$thekey =$this->User->getActivationKey($password);
						if ($thekey==$activateKey) {
					$this->log('holis 3');
							$user['User']['password']=$this->data['User']['password'];
							$salt=$this->UserAuth->makeSalt();
							$user['User']['salt'] = $salt;
							$user['User']['password'] = $this->UserAuth->makePassword($user['User']['password'], $salt);
							$this->User->save($user,false);
							$this->Session->setFlash('Su contraseña se ha restablecido con éxito.', 'default', array('class' => 'success_message'));
							$this->redirect('/login');
						} else {
							
						$this->Session->setFlash('Algo salió mal, por favor haga click en el enlace de restablecimiento de contraseña nuevamente.', 'default', array('class' => 'error_message'));
						}
					} else {
						
						$this->Session->setFlash('Algo salió mal, por favor haga click en el enlace de restablecimiento de contraseña nuevamente.', 'default', array('class' => 'error_message'));
					}
				}
			} else {
				
						$this->Session->setFlash('Algo salió mal, por favor haga click en el enlace de restablecimiento de contraseña nuevamente.', 'default', array('class' => 'error_message'));
			}
		} else {
					$this->log('holis 4');
			if (isset($_GET['ident']) && isset($_GET['activate'])) {
				$this->set('ident',$_GET['ident']);
				$this->set('activate',$_GET['activate']);
			}
		}
	}
	/**
	 * Used to send email verification mail to user
	 *
	 * @access public
	 * @return void
	 */
	public function emailVerification() {
		if ($this->request -> isPost()) {
			$this->User->set($this->data);
			if ($this->User->LoginValidate()) {
				$email  = $this->data['User']['email'];
				$user = $this->User->findByUsername($email);
				if (empty($user)) {
					$user = $this->User->findByEmail($email);
					if (empty($user)) {
						$this->Session->setFlash('Nombre de usuario o correo electrónico incorrecto.', 'default', array('class' => 'error_message'));
						return;
					}
				}
				if($user['User']['email_verified']==0) {
					$this->User->sendVerificationMail($user);
					$this->Session->setFlash('Por favor revise su correo para verificar su correo electrónico.', 'default', array('class' => 'success_message'));
				} else {
					$this->Session->setFlash('Su correo electrónico ya está verificado.', 'default', array('class' => 'success_message'));
				}
				$this->redirect('/login');
			}
		}
	}

}