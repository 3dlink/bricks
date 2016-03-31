<section id="login">
<div id="login_content">
  <img src="<?php echo $this->webroot; ?>img/acceder.png">
  <p><b>¿No tiene una cuenta?</b> <a href="<?php echo $this->webroot; ?>registro">Click para crear una</a></p>

  <?php echo $this->Form->create('User', array('url' => array('action' => 'login'))); ?>
    <div class="form">
      <div class="form-group">
        <?php echo $this->Form->input("email" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Correo Electrónico"))?>
      </div>
      <div class="form-group">
        <?php echo $this->Form->input("password" ,array("type"=>"password",'label' => false,'div'=>false,'class'=>"form-control", 'placeholder' => "Contraseña" ))?>
      </div>
    </div>    
    <div class="btn_login">
      <button type="Submit" class="bricks_btn small_btn_blue">
        Ingresar
      </button>
    </div>
  <?php echo $this->Form->end();?>  
    <div class="form-group olvido">
      <input type="checkbox"><small>Recordar mi Usuario</small><br>
      <a href="<?php echo $this->webroot.'forgotPassword';?>">¿Olvidó la contraseña?</a>
    </div>  

</div>
</section>

