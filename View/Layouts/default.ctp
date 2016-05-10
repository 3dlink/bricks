<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Bricks
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('owl.carousel');
		echo $this->Html->css('bricks');
		echo $this->Html->css('flip');
		echo $this->Html->script('jquery-2.2.0.min');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('conteo');
		echo $this->Html->script('scrollTo');
		echo $this->Html->script('owl.carousel.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script type="text/javascript">var WEBROOT='<?php echo $this->webroot; ?>';</script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-74593633-1', 'auto');
  ga('send', 'pageview');
 
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.6, user-scalable=no">
	<meta name="description" content="<?php echo $seodescription['Seodescription']['description']; ?>">
	<meta name="robots" content="index,follow">
	<meta name="title" content="Bricks">
	<link rel="canonical" href="http://www.bricksusa.com">
	<meta name="keywords" content="Bricks, Real Estate, crowdfunding, bricksusa, Inversiones">
	<meta property="og:url" content="http://www.bricksusa.com">
	<meta property="og:site_name" content="Bricks">
	<meta property="og:title" content="Bricks">
	<?php foreach ($keywords as $key => $value) { ?>
		<meta property="article:tag" content="<?php echo $value['Seokeyword']['keyword']; ?>">
	<?php } ?>
</head>
<body onload="PropertiesMap()">
  <?php $user = $this->UserAuth->getUser(); ?>
	<div id="container">
		<div id="header">
			<div id="logo"></div>
			<div onclick="window.location.href='<?php echo $this->webroot;?>'" class="menu_item">INICIO</div>
			<div onclick="window.location.href='<?php echo $this->webroot;?>nosotros'" class="menu_item">NOSOTROS</div>
			<div onclick="window.location.href='<?php echo $this->webroot;?>comoFunciona'" class="menu_item">CÓMO FUNCIONA</div>
			<div onclick="window.location.href='<?php echo $this->webroot;?>propiedades'" class="menu_item">PROPIEDADES</div>
			<div onclick="window.location.href='<?php echo $this->webroot;?>contacto'" class="menu_item">CONTÁCTANOS</div>
			<div id="ingles" class="idioma" onclick="window.location.href='<?php echo $this->webroot;?>us'"></div>
			<div id="espanhol" class="idioma" onclick="window.location.href='<?php echo $this->webroot;?>'"></div>
			<div id="menu_login">
				<?php if(empty($user)){ ?>
					<div onclick="window.location.href='<?php echo $this->webroot;?>login'">INGRESAR</div>
					<div onclick="window.location.href='<?php echo $this->webroot;?>registro'">EMPIEZA AHORA</div>
				<?php }else{ 
					if($this->UserAuth->getGroupId() == 1){	?>
										<div onclick="window.location.href='<?php echo $this->webroot;?>dashboard'"><div id="top_avatar" style="background-image : url('<?php echo $this->webroot."files/".$_SESSION["avatar"];?>');"></div>ADMIN</div>
										<div onclick="window.location.href='<?php echo $this->webroot;?>logout'">LOGOUT</div>
					<?php }else{ ?>
										<div onclick="window.location.href='<?php echo $this->webroot;?>editUser/<?php echo $user['User']['id'];?>'"><div id="top_avatar" style="background-image : url('<?php echo $this->webroot."files/".$_SESSION["avatar"];?>');"></div>MI PERFIL</div>
										<div onclick="window.location.href='<?php echo $this->webroot;?>logout'">LOGOUT</div>
					<?php } 
				} ?>
			</div>
			<div id="menu_movil_icon"></div>
		</div>
		<div id="menu_movil">
				<div onclick="window.location.href='<?php echo $this->webroot;?>'" class="menu_item_movil">INICIO</div>
				<div onclick="window.location.href='<?php echo $this->webroot;?>nosotros'" class="menu_item_movil">NOSOTROS</div>
				<div onclick="window.location.href='<?php echo $this->webroot;?>comoFunciona'" class="menu_item_movil">CÓMO FUNCIONA</div>
				<div onclick="window.location.href='<?php echo $this->webroot;?>propiedades'" class="menu_item_movil">PROPIEDADES</div>
				<div onclick="window.location.href='<?php echo $this->webroot;?>contacto'" class="menu_item_movil">CONTÁCTANOS</div>
				<div id="menu_login_movil">
					<?php if(empty($user)){ ?>
						<div onclick="window.location.href='<?php echo $this->webroot;?>login'">INGRESAR</div>
						<div onclick="window.location.href='<?php echo $this->webroot;?>registro'">EMPIEZA AHORA</div>
					<?php }else{ 
									if($this->UserAuth->getGroupId() == 1){	?>
										<div onclick="window.location.href='<?php echo $this->webroot;?>dashboard'"><div id="top_avatar"></div>ADMIN</div>
					<?php }else{ ?>
										<div onclick="window.location.href='<?php echo $this->webroot;?>'"><div id="top_avatar"></div>MI PERFIL</div>
					<?php }
					} ?>
				</div>
			</div>
		<div id="content">
    	<?php echo $this->Session->flash(); ?>	

			<?php echo $this->fetch('content'); ?>
		</div>
		<!-- <div id="footer">
			<div class="footer_row">
				<div class="footer_item first_item">
					<a href="<?php echo $this->webroot;?>">INICIO</a><br>
					<a href="<?php echo $this->webroot;?>nosotros">NOSOTROS</a><br>
					<a href="<?php echo $this->webroot;?>comoFunciona">CÓMO FUNCIONA</a><br>
					<a href="<?php echo $this->webroot;?>propiedades">PROPIEDADES</a><br>
					<a href="<?php echo $this->webroot;?>contacto">CONTÁCTENOS</a>
				</div>
				<div class="footer_item center_item">
					+52 55 56441842<br>
					+305 4593070<br>
					info@bricksusa.com
				</div>
				<div class="footer_item last_item">
					Insurgentes Sur 1877, oficina 202, Col. Gpe Inn, Deleg. Álvaro Obregón, C.P. 01020, México DF.
				</div>
			</div>
			<div class="footer_text">
				The securities offered by the issuers on Prodigy Network (the "Securities") may be sold only to (A) investors who are (i) "accredited investors" as defined in Rule 501 under the U.S. Securities Act of 1933, as amended (the "Securities Act"), or (B) certain eligible investors who are not "U.S. persons" as defined in Rule 902 under the Securities Act. The issuers on Prodigy Network offer the Securities in reliance on Rule 506 and Regulation S under the Securities Act, which are exemptions from the registration and disclosure requirements that apply to offerings registered under the Securities Act. None of the issuers offering Securities through Prodigy Network have been registered, or are required to register, as an investment company under the Investment Company Act of 1940, as amended. Therefore, investors will not benefit from the protection of those acts. The Securities and Exchange Commission has not passed on the merits of or approved the Securities, the offering or the accuracy or completeness of any offering materials. The Securities are subject to legal restrictions on transfer and resale, and investors should not assume they will be able to resell their Securities. Risk factors disclosed in the offering materials for each investment should be carefully reviewed prior to making any investment decision and investors should be able to bear the entire loss of any investment.
				<br><br>
				The material contained in this website may include forward looking financial statements and/or representations. Neither Prodigy Network nor its affiliates make any representation or warranty, express or implied, as to the accuracy or completeness of this information, and nothing contained herein shall be relied upon as a promise or representation that past performance will be indicative of future performance. The information presented on this website may not be up to date and although images and concepts reflect good faith beliefs, expectations, estimates and/or projections of Prodigy Network, they are not guarantees and are subject to change. Prodigy Network undertakes no obligation to update any outdated information. 
				<br><br>
				The investments and/or services offered through Prodigy Network do not constitute "Crowdfunding" as described in Title III of the Jumpstart Our Business Startups Act ("JOBS Act").
				<br><br>
				References to Prodigy Network, Prodigy, we, and/or us refer to Prodigy Network Miami, LLC as owner of the platform/website. Amounts raised and number of projects financed as disclosed on this website include amounts raised for Prodigy Network and its affiliate issuers both in the United States and internationally.
			</div >-->
		</div>
	<?php echo $this->element('sql_dump'); ?>

	<script type="text/javascript">

		$(window).resize(function() {	
			if($(window).width() > 500){
				var h = mayor($('.first_item').height(),$('.last_item').height());
		  	$('.center_item').height(h);
		  }
		});

		$(document).ready(function(){			
			if($(window).width() > 500){
				var h = mayor($('.first_item').height(),$('.last_item').height());
		  	$('.center_item').height(h);
		  }
		});

		function mayor(a,b){
			if (a >= b) {
 				return a;
			}else{
			 	return b;
			}
		}

		$('#menu_movil_icon').click(function(event) {
			if($('#menu_movil').hasClass('in')){
				$('#menu_movil').css('display', 'none');
				$('#menu_movil').removeClass('in');
			}else{
				$('#menu_movil').css('display', 'block');
				$('#menu_movil').addClass('in');
			}
		});

	</script>


</body>
</html>
