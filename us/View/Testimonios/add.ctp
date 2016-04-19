<article class="card shadow-1">
<?php echo $this->Form->create('Testimonio'); ?>
    <fieldset>
      <legend>Agregar Testimonio</legend>
      <div class="margenesHorizontales">

				<div class="col-md-12">
	        <div class="form-group">
	          <label>Testimonio</label>
	          <?php echo $this->Form->input('testimonio',array('div'=>false, 'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Testimonio', 'required'=>true)); ?>
	        </div>
				</div>

				<div class="col-md-12">
	        <div class="form-group">
	          <label>Firma</label>
	          <?php echo $this->Form->input('autor',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Firma')); ?>
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