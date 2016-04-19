<?php echo $this->Html->script('pekeUpload'); ?>
<section id="profile">
	<div id="profile_content">

		<?php echo $this->Form->create('User'); ?>
<?php $userito = $this->Session->read('UserAuth'); ?>
        <?php echo $this->Form->input("id" ,array('type' => 'hidden', 'label' => false,'div' => false))?>
		<div id="avatar" style="background-image:url('<?php echo $this->webroot."files/".$_SESSION["avatar"];?>');"></div>
		<div style="text-align:center;margin-bottom:20px;">
			<input type="file" class="" id="file2" name="file2" accept="image/*" data-img="" data-index="" />
		</div>

    <div class="form-group">
      <?php echo $this->Form->input("first_name" ,array("type"=>"text",'label' => 'Nombre:','div'=>false,'class'=>"form-control inp_edit"))?>
    </div>
		<div class="form-group">
      <?php echo $this->Form->input("last_name" ,array('type'=> 'text', 'label' => 'Apellido:','div'=>false, 'class' => 'form-control inp_edit'))?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("email" ,array('type'=> 'text', 'label' => 'Correo Electrónico:','div'=>false, 'class' => 'form-control inp_edit_e'))?>
    </div>
		
		<div class="imageHiddenContent2">
			<?php if($userito['User']['avatar'] != ""){
				echo '<input type="hidden" value="'.$_SESSION["avatar"].'" id="useravatar" name="data[User][avatar]">';
			}?>
		</div>
		<div id="ry"><div class="ry_h"></div></div>
		

		<div class="bottom_flip flip">
      <div class="flip_items">
        <div class="box front"><button class="bricks_btn edit_btn" type="submit" onclick="window.location.href='<?php echo $this->webroot;?>nosotros'">EDITAR</button></div>
        <div class="box back"><button class="bricks_btn edit_btn" type="submit" onclick="window.location.href='<?php echo $this->webroot;?>nosotros'">EDITAR</button>
        </div>
      </div>
    </div>

	</div>
</section>

<script type="text/javascript">

$("#file2").pekeUpload({showPercent: false,allowedExtensions:"jpeg|jpg|png|gif", multi:false, url:"<?php echo $this->webroot?>pages/upload/1"});

</script>