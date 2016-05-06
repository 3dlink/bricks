<section id="inicio_propiedades">
	<img src="<?php echo $this->webroot; ?>img/propiedades.png">
</section>

<section id="propiedades">
	<div class="titulo">
		<h1 id="titulo_propiedades"><div class="rayita_izquierda ray_nos"></div>PROPIEDADES</h1>
	</div>

	<div class="filtro">
	<form method="get">

		<div class="filter_item">
			<span><b><span style="color:#fe6500;">-</span> Inversión</b></span>
			<select name="price_select" class="select">
			  <option value="0">Todos</option>
			  <option value="1">Entre US$25.000 a US$50.000</option>
			  <option value="2">Entre US$50.001 a US$100.000</option>
			  <option id="opt_3" value="3">Más de US$100.001</option>
			</select>
		</div>
		<div class="filter_item">
			<span><b><span style="color:#fe6500;">-</span> TIR</b></span>
			<select name="tir_select" class="select">
			  <option value="0">Todos</option>
			  <option value="1">Entre 5% a 7%</option>
			  <option value="2">Entre 8% a 10%</option>
			  <option value="3">Entre 11%a 15%</option>
			</select>
		</div>
		<div class="filter_item">
			<span><b><span style="color:#fe6500;">-</span> Ubicación</b></span>
			<select name="ubicacion_select" class="select">
			  <option value="0">Todos</option>
			  <option value="us" class="bold">Estados Unidos</option>
			  <option value="Alabama">Alabama</option>
				<option value="Alaska">Alaska</option>
				<option value="Arizona">Arizona</option>
				<option value="Arkansas">Arkansas</option>
				<option value="California">California</option>
				<option value="Colorado">Colorado</option>
				<option value="Connecticut">Connecticut</option>
				<option value="Delaware">Delaware</option>
				<option value="District Of Columbia">District Of Columbia</option>
				<option value="Florida">Florida</option>
				<option value="Georgia">Georgia</option>
				<option value="Hawaii">Hawaii</option>
				<option value="Idaho">Idaho</option>
				<option value="Illinois">Illinois</option>
				<option value="Indiana">Indiana</option>
				<option value="Iowa">Iowa</option>
				<option value="Kansas">Kansas</option>
				<option value="Kentucky">Kentucky</option>
				<option value="Louisiana">Louisiana</option>
				<option value="Maine">Maine</option>
				<option value="Maryland">Maryland</option>
				<option value="Massachusetts">Massachusetts</option>
				<option value="Michigan">Michigan</option>
				<option value="Minnesota">Minnesota</option>
				<option value="Mississippi">Mississippi</option>
				<option value="Missouri">Missouri</option>
				<option value="Montana">Montana</option>
				<option value="Nebraska">Nebraska</option>
				<option value="Nevada">Nevada</option>
				<option value="New Hampshire">New Hampshire</option>
				<option value="New Jersey">New Jersey</option>
				<option value="New Mexico">New Mexico</option>
				<option value="New York">New York</option>
				<option value="North Carolina">North Carolina</option>
				<option value="North Dakota">North Dakota</option>
				<option value="Ohio">Ohio</option>
				<option value="Oklahoma">Oklahoma</option>
				<option value="Oregon">Oregon</option>
				<option value="Pennsylvania">Pennsylvania</option>
				<option value="Rhode Island">Rhode Island</option>
				<option value="South Carolina">South Carolina</option>
				<option value="South Dakota">South Dakota</option>
				<option value="Tennessee">Tennessee</option>
				<option value="Texas">Texas</option>
				<option value="Utah">Utah</option>
				<option value="Vermont">Vermont</option>
				<option value="Virginia">Virginia</option>
				<option value="Washington">Washington</option>
				<option value="West Virginia">West Virginia</option>
				<option value="Wisconsin">Wisconsin</option>
				<option value="Wyoming">Wyoming</option>
			  <option value="mx" class="bold">México</option>
				<option value="Aguascalientes">Aguascalientes</option>
				<option value="Baja California">Baja California</option>
				<option value="Baja California Sur">Baja California Sur</option>
				<option value="Campeche">Campeche</option>
				<option value="Chiapas">Chiapas</option>
				<option value="Chihuahua">Chihuahua</option>
				<option value="Coahuila">Coahuila</option>
				<option value="Colima">Colima</option>
				<option value="Distrito Federal">Distrito Federal</option>
				<option value="Durango">Durango</option>
				<option value="Estado de Mexico">Estado de México</option>
				<option value="Guanajuato">Guanajuato</option>
				<option value="Guerrero">Guerrero</option>
				<option value="Hidalgo">Hidalgo</option>
				<option value="Jalisco">Jalisco</option>
				<option value="Michoacan">Michoacán</option>
				<option value="Morelos">Morelos</option>
				<option value="Nayarit">Nayarit</option>
				<option value="Nuevo Lean">Nuevo León</option>
				<option value="Oaxaca">Oaxaca</option>
				<option value="Puebla">Puebla</option>
				<option value="Queretaro">Querétaro</option>
				<option value="Quintana Roo">Quintana Roo</option>
				<option value="San Luis Potosí">San Luis Potosí</option>
				<option value="Sinaloa">Sinaloa</option>
				<option value="Sonora">Sonora</option>
				<option value="Tabasco">Tabasco</option>
				<option value="Tamaulipas">Tamaulipas</option>
				<option value="Tlaxcala">Tlaxcala</option>
				<option value="Veracruz">Veracruz</option>
				<option value="Yucatan">Yucatán</option>
				<option value="Zacatecas">Zacatecas</option>
			</select>
		</div>
		<div class="filter_item">
			<span><b><span style="color:#fe6500;">-</span> Status de ofertas</b></span>
			<select name="status_select" class="select">
			  <option value="0">Todos</option>
			  <option value="1">Abierta</option>
			  <option value="2">Cerrada</option>
			</select>
		</div>
		<div class="search_item">
			<button class="bricks_search_btn" type="submit">BUSCAR</button>
		</div>

	</form>
	</div>

	<div id="propierties_list">

		<?php foreach ($propierties as $propierty) { ?>
			<div id="prop_1" class="propiedad">
				<div class="col-sm-6 caja propiedad_left flip">
						<!-- <div class=""> -->
							<div class="flip_items">
								<h3><?php echo $propierty['Propierty']['name']; ?> <!-- <span>DOLOR SIT.</span> --></h3>
								<div class="img_prop box front" style="background-image:url('<?php echo $this->webroot; ?>files/<?php echo $propierty['Upload'][0]['name']; ?>');">
									<?php if($propierty['Propierty']['status_percent']==100){ ?>
			        			<button class="slider_btn small_btn proyecto_btn cerrada_btn" type="button">OFERTA CERRADA</button>
			        		<?php }?>
		        		</div>
								<!-- <img src="<?php echo $this->webroot; ?>files/<?php echo $propierty['Upload'][0]['name']; ?>"> --><div class="box back detras_left">
									<p><?php echo $propierty['Propierty']['info']; ?></p>
				        	<!-- <button class="slider_btn small_btn proyecto_btn" onclick="window.location.href='<?php echo $this->webroot;?>propiedad/<?php echo $propierty['Propierty']['id']; ?>'" type="button">VER PROYECTO</button> -->
								</div>
								<?php if($propierty['Propierty']['status_percent']<100){ ?>
									<button class="btn_normal" onclick="window.location.href='<?php echo $this->webroot;?>propiedad/<?php echo $propierty['Propierty']['id']; ?>'" type="button">INVIERTE YA</button>
								<?php }?>
							</div>

						<!-- </div> -->
				</div>
				<div class="col-sm-6 right">

					<div class="propiedad_list flip">
						<div class="flip_items">
							<div class="box caja front">
								<div class="col-sm-6 pregunta"><img src="<?php echo $this->webroot; ?>img/calendario_icon.png"></img>Período de tenencia estimado</div>
								<div class="col-sm-6 respuesta"><?php echo $propierty['Propierty']['tenencia']; ?> Años
								</div>
									<div class="ver_video">
										<img src="<?php echo $this->webroot; ?>img/video_icon.png"> Ver Video
									</div>
							</div>
							<div class="box caja back detras_list">
								<div class="col-sm-6 bottom_pregunta">Período de tenencia estimado</div>
								<div class="col-sm-6 bottom_respuesta pequenha">Tiempo estimado hasta la venta de la propiedad
								</div>
									<div class="ver_video">
										<img src="<?php echo $this->webroot; ?>img/video_icon.png"> Ver Video
									</div>
							</div>
						</div>
					</div>

					<div class="propiedad_list flip">
						<div class="flip_items">
							<div class="box caja front">
								<div class="col-sm-6 pregunta"><img src="<?php echo $this->webroot; ?>img/percent_icon.png"></img>Retorno Cash to Cash</div>
								<div class="col-sm-6 respuesta"><?php echo $propierty['Propierty']['retorno_cash']; ?><span class="perc">%</span>
								</div>
									<div class="ver_video">
										<img src="<?php echo $this->webroot; ?>img/video_icon.png"> Ver Video
									</div>
							</div>
							<div class="box caja back detras_list">
								<div class="col-sm-6 bottom_pregunta">Retorno Cash to Cash</div>
								<div class="col-sm-6 bottom_respuesta" style="padding: 0px 0px;font-size: 11px;">Es el retorno que recibe el inversionista por concepto de pago de rentas, tomando el promedio de los ingresos  por concepto de rentas del contrato en el plazo que se llevara la inversión
								</div>
									<div class="ver_video">
										<img src="<?php echo $this->webroot; ?>img/video_icon.png"> Ver Video
									</div>
							</div>
						</div>
					</div>

					<div class="propiedad_list flip">
						<div class="flip_items">
							<div class="box caja front">
								<div class="col-sm-6 pregunta"><img src="<?php echo $this->webroot; ?>img/percent_icon.png"></img>TIR Proyectada</div>
								<div class="col-sm-6 respuesta"><?php echo $propierty['Propierty']['tir']; ?><span class="perc">%</span>
								</div>
									<div class="ver_video">
										<img src="<?php echo $this->webroot; ?>img/video_icon.png"> Ver Video
									</div>
							</div>
							<div class="box caja back detras_list">
								<div class="col-sm-6 bottom_pregunta">TIR Proyectada</div>
								<div class="col-sm-6 bottom_respuesta" style="padding: 0px 0px;font-size: 11px;">La tasa interna de retorno que nos permite ver de forma anualizada el retorno de una inversión tomando en cuenta el tiempo en que se recupera el capital invertido
								</div>
									<div class="ver_video">
										<img src="<?php echo $this->webroot; ?>img/video_icon.png"> Ver Video
									</div>
							</div>
						</div>
					</div>

					<div class="propiedad_list flip">
						<div class="flip_items">
							<div class="box caja front">
								<div class="col-sm-6 pregunta"><img src="<?php echo $this->webroot; ?>img/torta_icon.png"></img>Status de la Oferta</div>
								<div class="col-sm-6 respuesta" style="min-width: 200px;margin-right:0;">
										<div class="percent">
											<div class="top_text">
												<small><?php echo round($propierty['Propierty']['status_percent'],1); ?><span class="perc">%</span></small>
											</div>
											<big>0$</big>
											<div class="progresionBarDefault">
												<div id="barProgress" style="width: <?php echo round($propierty['Propierty']['status_percent'],1); ?>%;"></div>
											</div>
											<?php
												$top = '';
												if($propierty['Propierty']['status_top']/1000000 > 1)
													$top = round(($propierty['Propierty']['status_top']/1000000),2).'M';
												elseif($propierty['Propierty']['status_top']/1000 > 1)
													$top = round(($propierty['Propierty']['status_top']/1000),2).'K';
												else
													$top = ($propierty['Propierty']['status_top']);
											?>

											<big><?php echo $top.'$'; ?></big>
										</div>
								</div>
							</div>
							<div class="box caja back detras_list">
								<div class="col-xs-6 col-md-4 bottom_pregunta status">Status de la Oferta</div>
								<div class="col-xs-12 col-sm-6 col-md-8 bottom_respuesta">Fondos recaudados hasta la fecha</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php } ?>
	</div>


	<div id="paginador">
		<ul class="pagination">
		<?php
		  echo $this->Paginator->prev('<div id="arrow_left"></div>', array('tag' => 'li', 'escape' => false), '<div id="arrow_left"></div>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
		  echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a', 'class'=>'diego'));
		  echo $this->Paginator->next('<div id="arrow_right"></div>', array('tag' => 'li', 'escape' => false), '<div id="arrow_right"></div>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
		?>
		</ul>
	</div>

</section>

<script type="text/javascript">

$('.diego').find('a').html('<div class="punto_pag"></div>');

$('.select').change(function(event) {
	$(this).addClass('seleccionado');
});

$(document).ready(function() {
	if(window.location.search!=''){
		//?price_select=1&tir_select=2&ubicacion_select=Idaho&status_select=1
		var par = window.location.search;
		par = par.split('?')[1];
		par = par.split('&');

		$.each(par,function(index, el) {
			select = el.split('=')[0];
			val = el.split('=')[1];
			$('select[name='+select+'] option[value="' + val + '"]').attr('selected', 'selected');;
		});
	}
});

</script>
