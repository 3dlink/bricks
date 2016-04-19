<?php
	class AppController extends Controller 
	{
		var $helpers = array('Form', 'Html', 'Seo.Seo', 'Session', 'Js', 'Usermgmt.UserAuth');
		public $components = array('Session','RequestHandler', 'Usermgmt.UserAuth');
		function beforeFilter(){
			$this->userAuth();
		}
		private function userAuth(){
			$this->UserAuth->beforeFilter($this);
		}
	}
?>