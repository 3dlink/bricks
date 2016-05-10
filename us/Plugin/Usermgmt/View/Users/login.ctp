<section id="login">
<div id="login_content">
  <img src="<?php echo $this->webroot; ?>img/acceder.png">
  <p><b>Don't have an account?</b> <a href="<?php echo $this->webroot; ?>registro">Click to sign up</a></p>

  <?php echo $this->Form->create('User', array('url' => array('action' => 'login'))); ?>
    <div class="form">
      <div class="form-group">
        <?php echo $this->Form->input("email" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Email"))?>
      </div>
      <div class="form-group">
        <?php echo $this->Form->input("password" ,array("type"=>"password",'label' => false,'div'=>false,'class'=>"form-control", 'placeholder' => "Password" ))?>
      </div>
    </div>    
    <div class="btn_login">
      <button type="Submit" class="bricks_btn small_btn_blue">
        Log in 
      </button>
    </div>
  <?php echo $this->Form->end();?>  
    <div class="form-group olvido">
      <input type="checkbox"><small>Remember my user</small><br>
      <a href="<?php echo $this->webroot.'forgotPassword';?>">Forgot your password?</a>
    </div>  

</div>
</section>

