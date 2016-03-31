<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
?>
<!doctype html>
<html lang="">
  <head>
    <meta charset="utf-8">
	<title>
		Bricks Admin
	</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
	echo $this->Html->meta('icon');

    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('bricks');
    echo $this->Html->css('admin');
    echo $this->Html->css('dropzone');
    echo $this->Html->css('main');
    echo $this->Html->script('jquery-2.2.0.min');
    echo $this->Html->script('jquery.mask.min');
    echo $this->Html->script('bootstrap.min');
    echo $this->Html->script('dropzone');

	echo $this->fetch('meta');
	echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
    
<script type="text/javascript">WEBROOT='<?php echo $this->webroot; ?>';</script>
  </head>
  <body>    
    <!--Header Open-->
    <header style="display: table;">
    </header>
    <!--Header Close-->
    <?php
    	echo $this->element('menu');
    ?>
    
    <section class="container">	
    	<?php echo $this->Session->flash(); ?>	
		<?php echo $this->fetch('content'); ?>
    </section>
  </body>
</html>
