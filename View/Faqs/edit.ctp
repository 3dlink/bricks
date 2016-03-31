<article class="card shadow-1">
<?php echo $this->Form->create('Faq'); echo $this->Form->input('id');?>
    <fieldset>
      <legend>Editar FAQ</legend>
      <div class="margenesHorizontales">

				<div class="col-md-12">
	        <div class="form-group">
	          <label>Pregunta</label>
	          <?php echo $this->Form->input('ask',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Pregunta')); ?>
	        </div>
	      </div>

				<div class="col-md-12">
	        <div class="form-group">
	          <label>Respuesta</label>
	          <?php echo $this->Form->input('answer',array('div'=>false, 'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Respuesta', 'required'=>true, 'type'=>'textarea')); ?>
	        </div>
				</div>

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'faqs';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Guardar
          </button>
        </div>
      </div>          
    </fieldset>  
</article>