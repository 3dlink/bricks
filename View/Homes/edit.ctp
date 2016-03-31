<article class="card shadow-1">
<?php echo $this->Form->create('Home'); echo $this->Form->input('id');?>
    <fieldset>
      <legend>Agregar Item</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
	        <div class="form-group">
	          <label>Nombre</label>
	          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Nombre')); ?>
	        </div>
	      </div>

				<div class="col-md-6">
	        <div class="form-group">
	          <label>Texto</label>
	          <?php echo $this->Form->input('text',array('div'=>false, 'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Texto', 'required'=>true, 'type'=>'textarea')); ?>
	        </div>
				</div>

				<div class="col-md-6 dlink-dropzone" style="margin:30px 0;">
	        <label>Imagen (se reemplazará la imagen actual)</label>
	        <div  class="dropzone"  id ="my-dropzone"  name="mainFileUploader">
            <div  class="fallback">
            	<input  name="file"  type="file" />
            </div>
	        </div>
	      </div>

	      <div id="content_imgs"></div>

				<div class="col-md-12">
	        <div class="form-group">
	          <label>Imagen actual</label>
	          <div id="imagenes_content">
	          	<div id="img_edit" class="img_edit">
	          		<img src="<?php echo $this->webroot.'files/'.$this->data['Home']['image']; ?>" style="width:100%;">
	          	</div>
	          </div>
	        </div>
	      </div>

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
			$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Home][image]">');
			var name = data.xhr.response;
			name = name.split('"');
			$('#img_edit').find('img').attr('src', WEBROOT+'files/'+name[1]);
	  }
	});

</script>