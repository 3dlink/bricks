<article class="card shadow-1">
<?php echo $this->Form->create('Video'); ?>
    <fieldset>
      <legend>Agregar Video</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
	        <div class="form-group">
	          <label>Nombre</label>
	          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Nombre')); ?>
	        </div>
	      </div>

				<div class="col-md-6">
	        <div class="form-group">
	          <label>ID del Video</label>
	          <?php echo $this->Form->input('video',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'ID del video')); ?>
	        </div>
	      </div>

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'videos';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Guardar
          </button>
        </div>
      </div>          
    </fieldset>  
</article>