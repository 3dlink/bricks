
<!--Forgot Open-->
<article id="forgot" class="card shadow-1 login">
 <fieldset>
    <h1>Recuperar contraseña</h1>
    <?php echo $this->Form->create('User', array('action' => 'activatePassword')); ?>
      <div class="margenesHorizontales">
        <div class="form-group">
          <label>Contraseña</label><?php echo $this->Form->input("password" ,array('label' => false,'div' => false,'class'=>"form-control","type"=>"password", "placeholder"=>"Introduzca su contraseña" ))?>
        </div>
        <div class="form-group">
          <label>Confirme Contraseña</label><?php echo $this->Form->input("cpassword" ,array('label' => false,'div' => false,'class'=>"form-control","type"=>"password", "placeholder"=>"Confirme su contraseña" ))?>
        </div>
      </div>   

      <div class="margenesHorizontales margenesVerticales" style="text-align:right;">
      <?php   if (!isset($ident)) {
							$ident='';
						}
						if (!isset($activate)) {
							$activate='';
						}   ?>
						<?php echo $this->Form->hidden('ident',array('value'=>$ident))?>
						<?php echo $this->Form->hidden('activate',array('value'=>$activate))?> 
      <div class="bottom_flip flip">
        <div class="flip_items">
          <div class="box front"><button class="bricks_btn small_btn" type="submit">Enviar</button></div>
          <div class="box back"><button class="bricks_btn small_btn" type="submit">Enviar</button>
          </div>
        </div>
      </div>
      </div>
    <?php echo $this->Form->end(); ?>         
  </fieldset>
</article>
  <!--Forgot  Close-->