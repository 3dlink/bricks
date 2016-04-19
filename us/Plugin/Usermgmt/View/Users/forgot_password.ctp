<!--Forgot Open-->
<article id="forgot" class="card shadow-1 login">
 <fieldset>
    <h1>Recuperar contraseña</h1>
    <?php echo $this->Form->create('User', array('action' => 'forgotPassword')); ?>
      <div class="margenesHorizontales">
        <div class="form-group">
          <label>Correo electrónico</label>          <?php echo $this->Form->input("email" ,array('label' => false,'div' => false,'class'=>"form-control","type"=>"text","id"=>"entity_name", "placeholder"=>"Introduzca su correo eléctronico" ))?>
        </div>
      </div>    
      <div class="bottom_flip flip">
        <div class="flip_items">
          <div class="box front"><button class="bricks_btn small_btn" style="width:250px;" type="submit">Recuperar contraseña</button></div>
          <div class="box back"><button class="bricks_btn small_btn" style="width:250px;" type="submit">Recuperar contraseña</button>
          </div>
        </div>
      </div>
    <?php echo $this->Form->end(); ?>         
  </fieldset>
</article>
  <!--Forgot  Close-->