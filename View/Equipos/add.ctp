<article class="card shadow-1">
<?php echo $this->Form->create('Equipo'); ?>
    <fieldset>
      <legend>Agregar Equipo</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
	        <div class="form-group">
	          <label>Nombre</label>
	          <?php echo $this->Form->input('nombre',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Nombre')); ?>
	        </div>
	      </div>

				<div class="col-md-6">
	        <div class="form-group">
	          <label>Cargo</label>
	          <?php echo $this->Form->input('cargo',array('div'=>false, 'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Cargo', 'required'=>true)); ?>
	        </div>
				</div>

				<div class="col-md-6">
	        <div class="form-group">
	          <label>Url Linkedin</label>
	          <?php echo $this->Form->input('linkedin',array('div'=>false, 'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Url Linkedin', 'required'=>true)); ?>
	        </div>
				</div>

				<div class="col-md-6 dlink-dropzone" style="margin:30px 0;">
	        <label>Imagen</label>
	        <div  class="dropzone"  id ="my-dropzone"  name="mainFileUploader">
            <div  class="fallback">
            	<input  name="file"  type="file" />
            </div>
	        </div>
	      </div>

	      <div id="content_imgs"></div>

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'homes';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Guardar
          </button>
        </div>
      </div>          
    </fieldset>  
</article>


<script type="text/javascript">

	$("#my-dropzone").dropzone({ url: WEBROOT+"pages/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Arrastra aquí todos los archivos a cargar o <a  class="add-files">selecciónalos de tu computador</a></p>',
		success:function(data){
			$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Equipo][imagen]">');
	  }
	});

</script>