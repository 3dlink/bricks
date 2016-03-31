<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class StartController extends AppController {
	public $components = array('Paginator', 'Session');

	public function sendMail(){
		$this->autoRender = false;

		$from = 'info@bricksusa.com';
		$to = array('diegobritop.9@gmail.com','alberto@bricks.com.mx', 'kenneth@somoscriollos.com');
		$subject=  "Tienes un nuevo contacto";
		//$content = $this->__armar_contenido($_REQUEST['name'],$_REQUEST['email'],$_REQUEST['details']);
		//$this->__enviar_correo($from, $to, $subject, $content);
		$mensaje=
		"Has recibido un nuevo mensaje de: \n\n\n"
		."<b>Nombre:</b> ".$_POST['data']['name']."\n"
		."<b>Teléfono:</b> ".$_POST['data']['phone']."\n"
		."<b>País:</b> ".$_POST['data']['country']."\n"
		."<b>Correo:</b> ".$_POST['data']['email']."\n"
		."<b>Contenido:</b> ".$_POST['data']['cuestion']."\n";
		// mail($to,$subject,$mensaje,$from);
		$this->__enviar_correo($from, $to, $subject, $mensaje);
		return json_encode(1);
	}


	function __enviar_correo($from, $to, $subject, $contenido){		
		$Email = new CakeEmail();
		$Email->config('_temp')
		->to($to)
		->subject($subject)
		->from($from)
		->template('default')
		->emailFormat('html')
		->send($contenido);
	}
	
	function __armar_contenido($name, $email, $observation){
	
		$nombre = $name;
	
		$observaciones = $observation;
	
		$content = "<table width='100%'>
		<tr>
		<td style='text-align: left; color: black; width: 60%;'>
		<h3>El siguiente usuario est&aacute; solicitando informaci&oacute;n de contacto:</h3>
		</td>
		</tr>
		<tr>
		<td style='text-align: left; color: black; width: 60%;'>
		<b>Datos de contacto:</b><br>
		Nombre : $nombre<br>
	
		Correo: $email<br>
		Problema: $observaciones <br>
		</td>
		</tr>
		<tr>
		<td colspan='2'>
		</td>
		</tr>
		<tr style='height: 20px;'></tr>
		<tr style='height: 50px;'></tr>
		</table>";
	
		return $content;
	
	}



}