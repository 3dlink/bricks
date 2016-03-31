<?php echo $this->Html->script('pekeUpload'); ?>
<section id="profile">
	<div id="profile_content">
		<?php //echo h($user['User']['email'])?>
		<?php //echo h($user['User']['first_name'])?>
		<?php //echo h($user['User']['last_name'])?>

		<div id="avatar" style="background-image:url('<?php echo $this->webroot."files/".$user['User']['avatar'];?>');"></div>
		<div style="text-align:center;">
			<input type="file" class="" id="file2" name="file2" accept="image/*" data-img="" data-index="" />
		</div>

		<?php echo $this->Form->create('User'); ?>
<?php $userito = $this->Session->read('UserAuth'); ?>
        <?php echo $this->Form->input("id" ,array('type' => 'hidden', 'label' => false,'div' => false))?>

    <div class="form-group">
      <?php echo $this->Form->input("name" ,array("type"=>"text",'label' => 'Nombre:','div'=>false,'class'=>"form-control"))?>
    </div>
		<div class="form-group">
      <?php echo $this->Form->input("last_name" ,array('type'=> 'text', 'label' => 'Apellido:','div'=>false, 'class' => 'form-control'))?>
    </div>
    <div class="form-group">
      <?php echo $this->Form->input("email" ,array('type'=> 'text', 'label' => 'Correo Electrónico:','div'=>false, 'class' => 'form-control'))?>
    </div>
		
		<div class="imageHiddenContent2">
			<?php if($user['User']['avatar'] != ""){
				echo '<input type="hidden" value="'.$user['User']['avatar'].'" id="ArticleSquareImg" name="data[Article][square_img]">';
			}?>
		</div>

	</div>
</section>

<script type="text/javascript">

$("#file2").pekeUpload({showPercent: false,allowedExtensions:"jpeg|jpg|png|gif", multi:false, url:"<?php echo $this->webroot?>pages/upload/1"});

</script>