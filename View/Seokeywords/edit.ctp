<article class="card shadow-1">
<?php echo $this->Form->create('Seokeyword'); echo $this->Form->input('id');?>
    <fieldset>
      <legend>Add Keyword</legend>
      <div class="margenesHorizontales">

				<div class="col-md-12">
	        <div class="form-group">
	          <label>Keyword</label>
	          <?php echo $this->Form->input('keyword',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Keyword')); ?>
	        </div>
	      </div>

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'seokeywords';" title="regresar" value = "Go Back" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Save
          </button>
        </div>
      </div>          
    </fieldset>  
</article>