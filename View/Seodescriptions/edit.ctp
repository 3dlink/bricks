<article class="card shadow-1">
<?php echo $this->Form->create('Seodescription'); echo $this->Form->input('id');?>
    <fieldset>
      <legend>SEO Description</legend>
      <div class="margenesHorizontales">

				<div class="col-md-12">
	        <div class="form-group">
	          <label>Description</label>
	          <?php echo $this->Form->input('description',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Description')); ?>
	        </div>
	      </div>

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'seodescriptions';" title="regresar" value = "Go Back" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Save
          </button>
        </div>
      </div>          
    </fieldset>  
</article>