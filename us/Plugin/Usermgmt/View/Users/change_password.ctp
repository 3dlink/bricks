<section id="profile">
	<div id="profile_content" class="change_pass">
					<?php echo $this->Form->create('User', array('action' => 'changePassword')); ?>
    <div class="form-group">
      <?php echo $this->Form->input("oldpassword" ,array("type"=>"password",'label' => 'Contraseña anterior','div' => false,'class'=>"form-control inp_edit",'error' => array('attributes' => array('wrap' => 'div','class' => 'error_message')) ))?>
    </div>
		<div class="form-group">
      <?php echo $this->Form->input("password" ,array("type"=>"password",'label' => 'Contraseña nueva','div' => false,'class'=>"form-control inp_edit",'error' => array('attributes' => array('wrap' => 'div','class' => 'error_message')) ))?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("cpassword" ,array("type"=>"password",'label' => 'Repita contraseña nueva','div' => false,'class'=>"form-control inp_edit",'error' => array('attributes' => array('wrap' => 'div','class' => 'error_message')) ))?>
    </div>
		<div id="ry"><div class="ry_h"></div></div>
		

		<div class="bottom_flip flip">
      <div class="flip_items">
        <div class="box front"><button class="bricks_btn edit_btn" type="submit" onclick="window.location.href='<?php echo $this->webroot;?>nosotros'">GUARDAR</button></div>
        <div class="box back"><button class="bricks_btn edit_btn" type="submit" onclick="window.location.href='<?php echo $this->webroot;?>nosotros'">GUARDAR</button>
        </div>
      </div>
    </div>
					<?php echo $this->Form->end(); ?>

	</div>
</section>

<!-- 

<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<?php //echo $this->element('dashboard'); ?>
	
		<div class="page-header">
			<h1>
				Change Password
				<small>
					<i class="icon-double-angle-right"></i>
					Change Password
				</small>
			</h1>
		</div>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			
			<div class="row">
				<div class="col-xs-12">
				
				
					<?php echo $this->Form->create('User', array('action' => 'changePassword')); ?>
					<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Current Password<font color='red'>*</font> </label>
						<div class="col-sm-9"><?php echo $this->Form->input("oldpassword" ,array("type"=>"password",'label' => false,'div' => false,'class'=>"umstyle5",'error' => array('attributes' => array('wrap' => 'span', 'height'=>'1px', 'class' => 'alert alert-info')) ))?></div>
						<div style="clear:both"></div>
					</div>
					<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> New Password<font color='red'>*</font> </label>
						<div class="col-sm-9"><?php echo $this->Form->input("password" ,array("type"=>"password",'label' => false,'div' => false,'class'=>"umstyle5",'error' => array('attributes' => array('wrap' => 'span', 'height'=>'1px', 'class' => 'alert alert-info')) ))?></div>
						<div style="clear:both"></div>
					</div>
					<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Confirm Password<font color='red'>*</font> </label>
						<div class="col-sm-9"><?php echo $this->Form->input("cpassword" ,array("type"=>"password",'label' => false,'div' => false,'class'=>"umstyle5",'error' => array('attributes' => array('wrap' => 'span', 'height'=>'1px', 'class' => 'alert alert-info')) ))?></div>
						<div style="clear:both"></div>
					</div>
					<div>
						<div style="clear:both"></div>
						<div class="clearfix form-actions">
						<div class="col-md-offset-3 col-md-9 text-right">
							<button class="btn btn-info" type="submit" id="add">
								<i class="icon-ok bigger-110"></i>
								Save
							</button>
						</div>
						
					</div>
					<?php echo $this->Form->end(); ?>
				</div>
				<div class="um_box_mid_content_mid_right" align="right"></div>
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>
</div>
<script>
document.getElementById("UserPassword").focus();
</script> -->