<article class="card shadow-1">
<?php echo $this->Form->create('Propierty'); ?>
<?php	echo $this->Form->input('id');?>
    <fieldset>
      <legend>Editar Propiedad</legend>
      <div class="margenesHorizontales">

				<div class="col-md-6">
	        <div class="form-group">
	          <label>Nombre</label>
	          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Nombre')); ?>
	        </div>
	      </div>

				<div class="col-md-6">
	        <div class="form-group">
	          <label>Valor de la propiedad ($)</label>
	          <?php echo $this->Form->input('valor',array('div'=>false, 'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Valor de la propiedad ($)', 'required'=>true)); ?>
	        </div>
				</div>

				<div class="col-md-6">
	        <div class="form-group">
	          <label>Tenencia estimado (años)</label>
	          <?php echo $this->Form->input('tenencia',array('div'=>false, 'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Tenencia estimado (años)', 'required'=>true)); ?>
	        </div>
				</div>

				<div class="col-md-6">
	        <div class="form-group">
	          <label>Retorno cash on cash (%)</label>
	          <?php echo $this->Form->input('retorno_cash',array('div'=>false, 'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Retorno cash on cash (%)')); ?>
	        </div>
	      </div>


				<div class="col-md-6">
	        <div class="form-group">
	          <label>TIR proyectada (%)</label>
	          <?php echo $this->Form->input('tir',array('div'=>false, 'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'TIR proyectada (%)')); ?>
	        </div>
        </div>

				<!-- <div class="col-md-6">
	        <div class="form-group">
	          <label>Status de la Oferta (%)</label>
	          <?php echo $this->Form->input('status_percent',array('div'=>false, 'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Status de la Oferta (%)')); ?>
	        </div>
	      </div> -->


				<div class="col-md-6">
	        <div class="form-group">
	          <label>Retorno Nominal (%)</label>
	          <?php echo $this->Form->input('retorno_nominal',array('div'=>false, 'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Retorno Nominal (%)')); ?>
	        </div>
        </div>

				<div class="col-md-6">
	        <div class="form-group">
	          <label>Capital a levantar ($)</label>
	          <?php echo $this->Form->input('status_top',array('div'=>false, 'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Capital a levantar ($)')); ?>
	        </div>
	      </div>

				<div class="col-md-6">
	        <div class="form-group">
	          <label>Total Recaudado ($)</label>
	          <?php echo $this->Form->input('recaudado',array('div'=>false, 'required'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Total Recaudado ($)')); ?>
	        </div>
	      </div>


				<div class="col-md-6">
	        <div class="form-group">
	          <label>Información adicional - Max. 300 caracteres</label>
	          <?php echo $this->Form->input('info',array('div'=>false,'required'=>true,'maxlength'=>300,'label'=>false,'class'=>'form-control','type'=>'textarea')); ?>
	        </div>
	      </div>


				<div class="col-md-6">
	        <div class="form-group">
	          <label>Ubicación</label>
	          <?php echo $this->Form->input("ubicacion" ,array('type'=> 'select', 'label' => false,'div'=>false, 'class' => 'form-control', 'options'=>array(
	          	array('value' => 0, 'name' => 'Estados Unidos', 'class' => 'bold', 'disabled'=>'disabled'),
							array("value"=>"Alabama", "name"=> "Alabama"),
							array("value"=>"Alaska", "name"=> "Alaska"),
							array("value"=>"Arizona", "name"=> "Arizona"),
							array("value"=>"Arkansas", "name"=> "Arkansas"),
							array("value"=>"California", "name"=> "California"),
							array("value"=>"Colorado", "name"=> "Colorado"),
							array("value"=>"Connecticut", "name"=> "Connecticut"),
							array("value"=>"Delaware", "name"=> "Delaware"),
							array("value"=>"District Of Columbia", "name"=> "District Of Columbia"),
							array("value"=>"Florida", "name"=> "Florida"),
							array("value"=>"Georgia", "name"=> "Georgia"),
							array("value"=>"Hawaii", "name"=> "Hawaii"),
							array("value"=>"Idaho", "name"=> "Idaho"),
							array("value"=>"Illinois", "name"=> "Illinois"),
							array("value"=>"Indiana", "name"=> "Indiana"),
							array("value"=>"Iowa", "name"=> "Iowa"),
							array("value"=>"Kansas", "name"=> "Kansas"),
							array("value"=>"Kentucky", "name"=> "Kentucky"),
							array("value"=>"Louisiana", "name"=> "Louisiana"),
							array("value"=>"Maine", "name"=> "Maine"),
							array("value"=>"Maryland", "name"=> "Maryland"),
							array("value"=>"Massachusetts", "name"=> "Massachusetts"),
							array("value"=>"Michigan", "name"=> "Michigan"),
							array("value"=>"Minnesota", "name"=> "Minnesota"),
							array("value"=>"Mississippi", "name"=> "Mississippi"),
							array("value"=>"Missouri", "name"=> "Missouri"),
							array("value"=>"Montana", "name"=> "Montana"),
							array("value"=>"Nebraska", "name"=> "Nebraska"),
							array("value"=>"Nevada", "name"=> "Nevada"),
							array("value"=>"New Hampshire", "name"=> "New Hampshire"),
							array("value"=>"New Jersey", "name"=> "New Jersey"),
							array("value"=>"New Mexico", "name"=> "New Mexico"),
							array("value"=>"New York", "name"=> "New York"),
							array("value"=>"North Carolina", "name"=> "North Carolina"),
							array("value"=>"North Dakota", "name"=> "North Dakota"),
							array("value"=>"Ohio", "name"=> "Ohio"),
							array("value"=>"Oklahoma", "name"=> "Oklahoma"),
							array("value"=>"Oregon", "name"=> "Oregon"),
							array("value"=>"Pennsylvania", "name"=> "Pennsylvania"),
							array("value"=>"Rhode Island", "name"=> "Rhode Island"),
							array("value"=>"South Carolina", "name"=> "South Carolina"),
							array("value"=>"South Dakota", "name"=> "South Dakota"),
							array("value"=>"Tennessee", "name"=> "Tennessee"),
							array("value"=>"Texas", "name"=> "Texas"),
							array("value"=>"Utah", "name"=> "Utah"),
							array("value"=>"Vermont", "name"=> "Vermont"),
							array("value"=>"Virginia", "name"=> "Virginia"),
							array("value"=>"Washington", "name"=> "Washington"),
							array("value"=>"West Virginia", "name"=> "West Virginia"),
							array("value"=>"Wisconsin", "name"=> "Wisconsin"),
							array("value"=>"Wyoming", "name"=> "Wyoming"),
							array('value' => 1, 'name' => 'México', 'class' => 'bold', 'disabled'=>'disabled'),
							array("value"=>"Aguascalientes", "name"=> "Aguascalientes"),
							array("value"=>"Baja California", "name"=> "Baja California"),
							array("value"=>"Baja California Sur", "name"=> "Baja California Sur"),
							array("value"=>"Campeche", "name"=> "Campeche"),
							array("value"=>"Chiapas", "name"=> "Chiapas"),
							array("value"=>"Chihuahua", "name"=> "Chihuahua"),
							array("value"=>"Coahuila", "name"=> "Coahuila"),
							array("value"=>"Colima", "name"=> "Colima"),
							array("value"=>"Distrito Federal", "name"=> "Distrito Federal"),
							array("value"=>"Durango", "name"=> "Durango"),
							array("value"=>"Estado de Mexico", "name"=> "Estado de México"),
							array("value"=>"Guanajuato", "name"=> "Guanajuato"),
							array("value"=>"Guerrero", "name"=> "Guerrero"),
							array("value"=>"Hidalgo", "name"=> "Hidalgo"),
							array("value"=>"Jalisco", "name"=> "Jalisco"),
							array("value"=>"Michoacan", "name"=> "Michoacán"),
							array("value"=>"Morelos", "name"=> "Morelos"),
							array("value"=>"Nayarit", "name"=> "Nayarit"),
							array("value"=>"Nuevo Lean", "name"=> "Nuevo León"),
							array("value"=>"Oaxaca", "name"=> "Oaxaca"),
							array("value"=>"Puebla", "name"=> "Puebla"),
							array("value"=>"Queretaro", "name"=> "Querétaro"),
							array("value"=>"Quintana Roo", "name"=> "Quintana Roo"),
							array("value"=>"San Luis Potosí", "name"=> "San Luis Potosí"),
							array("value"=>"Sinaloa", "name"=> "Sinaloa"),
							array("value"=>"Sonora", "name"=> "Sonora"),
							array("value"=>"Tabasco", "name"=> "Tabasco"),
							array("value"=>"Tamaulipas", "name"=> "Tamaulipas"),
							array("value"=>"Tlaxcala", "name"=> "Tlaxcala"),
							array("value"=>"Veracruz", "name"=> "Veracruz"),
							array("value"=>"Yucatan", "name"=> "Yucatán"),
							array("value"=>"Zacatecas", "name"=> "Zacatecas"))));?>
	        </div>
	      </div>


				<div class="col-md-12">
	        <div class="form-group">
	          <label>Imágenes actuales</label>
	          <div id="imagenes_content">
	          	<?php if(isset($this->data['Upload'])){ ?>
		          	<?php foreach ($this->data['Upload'] as $img) { ?>
			          	<div id="img_<?php echo $img['id']; ?>" class="img_edit">
			          		<span id="<?php echo $img['id']; ?>" class="eliminar glyphicon glyphicon-remove"></span>
			          		<img src="<?php echo $this->webroot.'files/'.$img['name']; ?>" style="width:100%;">
			          	</div>
			          <?php } ?>
			        <?php } ?>
	          </div>
	        </div>
	      </div>



				<div class="col-md-12 dlink-dropzone" style="margin:30px 0;">
	        <label>Nuevas Imágenes</label>
	        <div  class="dropzone"  id ="my-dropzone"  name="mainFileUploader">
            <div  class="fallback">
            	<input  name="file"  type="file"  multiple/>
            </div>
	        </div>
	      </div>

	      <div id="content_imgs"></div>
	      <div id="content_xls"></div>
	      <div id="content_pdf"></div>

				<div class="col-md-6 dlink-dropzone">
	        <label>XLS (al cargar otro archivo se borrará el anterior)</label>
	        <div  class="dropzone"  id ="drop-xls"  name="mainFileUploader">
            <div  class="fallback">
            	<input  name="file"  type="file"  multiple/>
            </div>
	        </div>
	      </div>

				<div class="col-md-6 dlink-dropzone">
	        <label>PDF (al cargar otro archivo se borrará el anterior)</label>
	        <div  class="dropzone"  id ="drop-pdf"  name="mainFileUploader">
            <div  class="fallback">
            	<input  name="file"  type="file"  multiple/>
            </div>
	        </div>
	      </div>

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'propierties';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
          <button type="submit" class="btn btn-primary">
            Guardar
          </button>
        </div>
      </div>
    </fieldset>
</article>


<script type="text/javascript">

$("#my-dropzone").dropzone({ url: WEBROOT+"pages/upload/1", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Arrastra aquí todos los archivos a cargar o <a  class="add-files">selecciónalos de tu computador</a></p>', acceptedFiles: "image/jpeg,image/png,image/gif",
	success:function(data){
		$('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Propierty][Upload][][name]">');
  	// console.log(data.xhr.response);
  }
});

$("#drop-xls").dropzone({ url: WEBROOT+"pages/upload/2", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Arrastra aquí todos los archivos a cargar o <a  class="add-files">selecciónalos de tu computador</a></p>',maxFiles: 1, acceptedFiles: ".xls",
	success:function(data){
		$('#content_xls').html('<input type="hidden" value='+data.xhr.response+' name="data[Propierty][xls]">');
  }
});

$("#drop-pdf").dropzone({ url: WEBROOT+"pages/upload/3", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Arrastra aquí todos los archivos a cargar o <a  class="add-files">selecciónalos de tu computador</a></p>',maxFiles: 1, acceptedFiles: ".pdf",
	success:function(data){
		$('#content_pdf').html('<input type="hidden" value='+data.xhr.response+' name="data[Propierty][pdf]">');
  }
});

$('.eliminar').click(function(event) {
	if (confirm('¿Seguro de eliminar esta imágen?')) {
		$.post(WEBROOT+'propierties/removeIMG',{img_id:$(this).attr('id')},function(data){
			if(data!=0){
				$('#img_'+data).remove();
			}else{
				alert('Error al eliminar la imágen');
			}
		},'json');
	}
});


</script>
