<section id="view_propierties">
	<div class="view_propierties">
		<h4><?php echo ucwords($propierty['Propierty']['name']); ?> <!-- <span>DOLOR SIT.</span> --></h4>
		<img id="img_ppal" src="<?php echo $this->webroot; ?>files/<?php echo $propierty['Upload'][0]['name']; ?>">
		<div class="view-with-margin">
		  <div id="owl-demo" class="owl-carousel">
		  	<?php foreach ($propierty['Upload'] as $img) { ?>
			    <div class="item">
				    <img src="<?php echo $this->webroot; ?>files/<?php echo $img['name']; ?>">
			    </div>
			  <?php } ?>
			</div>
		</div>
	</div>

	<div id="info_gral_view">
		<div class="col-sm-6 info_left">

			<div class="propiedad_list flip">
				<div class="flip_items">
					<div class="box caja front">
						<div class="col-sm-6 pregunta"><img src="<?php echo $this->webroot; ?>img/calendario_icon.png"></img>Estimated holding period</div>
						<div class="col-sm-6 respuesta"><?php echo $propierty['Propierty']['tenencia']; ?> Years</div>
					</div>
					<div class="box caja back detras_list">
						<div class="col-sm-6 bottom_pregunta">Estimated holding period</div>
						<div class="col-sm-6 bottom_respuesta pequenha">Estimated time until the property sale</div>
					</div>
				</div>
			</div>

			<div class="propiedad_list flip">
				<div class="flip_items">
					<div class="box caja front">
						<div class="col-sm-6 pregunta"><img src="<?php echo $this->webroot; ?>img/percent_icon.png"></img>Cash on cash return</div>
						<div class="col-sm-6 respuesta"><?php echo $propierty['Propierty']['retorno_cash']; ?><span class="perc">%</span></div>
					</div>
					<div class="box caja back detras_list">
						<div class="col-sm-6 bottom_pregunta">Cash on cash return</div>
						<div class="col-sm-6 bottom_respuesta" style="padding: 0px 0px;font-size: 11px;">It´s the return that the investor receives as a payment of rents, taking the average income rents contract within the investment will take.</div>
					</div>
				</div>
			</div>

			<div class="propiedad_list flip">
				<div class="flip_items">
					<div class="box caja front">
						<div class="col-sm-6 pregunta"><img src="<?php echo $this->webroot; ?>img/percent_icon.png"></img>Projected IRR
						</div>
						<div class="col-sm-6 respuesta"><?php echo $propierty['Propierty']['tir']; ?><span class="perc">%</span>
						</div>
							<div class="ver_video">
								<img src="<?php echo $this->webroot; ?>img/video_icon.png"> Watch Video
							</div>
					</div>
					<div class="box caja back detras_list">
						<div class="col-sm-6 bottom_pregunta">Projected IRR</div>
						<div class="col-sm-6 bottom_respuesta" style="padding: 0px 0px;font-size: 11px;">The internal rate of return allows us to see annualized return on an investment taking into account the time invested capital is recovered.
						</div>
							<div class="ver_video">
								<img src="<?php echo $this->webroot; ?>img/video_icon.png"> Watch Video
							</div>
					</div>
				</div>
			</div>

			<div class="propiedad_list flip">
				<div class="flip_items">
					<div class="box caja front">
						<div class="col-sm-6 pregunta"><img src="<?php echo $this->webroot; ?>img/torta_icon.png"></img>Live offering</div>
						<div class="col-sm-6 respuesta" style="min-width: 200px;margin-right:0;">
								<div class="percent">
									<div class="top_text">
										<small><?php echo round($propierty['Propierty']['status_percent'],1); ?><span class="perc">%</span></small>
									</div>
									<big>0M</big>
									<div class="progresionBarDefault">
										<div id="barProgress" style="width: <?php echo round($propierty['Propierty']['status_percent'],1); ?>%;"></div>
									</div>
											<?php 
												$top = '';
												if($propierty['Propierty']['status_top']/1000000 > 1)
													$top = round(($propierty['Propierty']['status_top']/1000000),2).'M';
												elseif($propierty['Propierty']['status_top']/100000 > 1)
													$top = round(($propierty['Propierty']['status_top']/100000),2).'K';
												else
													$top = ($propierty['Propierty']['status_top']);
											?>

											<big><?php echo $top; ?></big>
								</div>
						</div>
					</div>
					<div class="box caja back detras_list">
						<div class="col-xs-6 col-md-4 bottom_pregunta">Live offering</div>
						<div class="col-xs-12 col-sm-6 col-md-8 bottom_respuesta">Funds raised to date towards the targeted amount of capital for the offering</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 info_right">
			<div class="descrip_item">
				<big>General Review</big>
				<p><?php echo $propierty['Propierty']['info']; ?></p>
			</div>

			<div class="propiedad_list flip">
				<div class="flip_items">
					<div class="box caja front">
						<div class="col-sm-6 pregunta"><img src="<?php echo $this->webroot; ?>img/retorno.png"></img>Nominal return</div>
						<div class="col-sm-6 respuesta"><?php echo $propierty['Propierty']['retorno_nominal']; ?><span class="perc">%</span></div>
					</div>
					<div class="box caja back detras_list">
						<div class="col-xs-6 col-md-4 bottom_pregunta">Nominal return</div>
						<div class="bottom_respuesta">It is the sum of all the income, depreciation and capital gain divided between the invested capital and the term of investment.</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div id="descargas">
		<div id="descargas_content">
			<?php if(!empty($propierty['Propierty']['xls'])){ ?>
			<a href="<?php echo $this->webroot; ?>files/<?php echo $propierty['Propierty']['xls']; ?>" title="Descargar información en formato excel" target="_blank"><div id="excel"></div></a>
			<?php } ?>
			<?php if(!empty($propierty['Propierty']['pdf'])){ ?>
			<a href="<?php echo $this->webroot; ?>files/<?php echo $propierty['Propierty']['pdf']; ?>" title="Descargar información en formato pdf" target="_blank"><div id="pdf"></div></a>
			<?php } ?>
			<?php if(!empty($propierty['Propierty']['xls']) || !empty($propierty['Propierty']['pdf'])){ ?>
			<p>DOWNLOAD</p>
			<?php } ?>
		</div>
	</div>

</section>

<script type="text/javascript">


$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    responsiveClass:true,
    nav:true,
    navText: [
      "<img class='arrow-black' src='<?php echo $this->webroot; ?>img/arrow-left-black.png'>",
      "<img class='arrow-black' src='<?php echo $this->webroot; ?>img/arrow-right-black.png'>"
      ],
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
	});
});

$('.item').click(function() {
	$('#img_ppal').attr('src', $(this).find('img').attr('src'));
});

</script>