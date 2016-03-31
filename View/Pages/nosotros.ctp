<section id="inicio_nosotros">
	<img src="<?php echo $this->webroot; ?>img/nosotros.jpg">
	<div id="punto"></div>

		<div id="menu_nosotros">
			<div id="menu_group">
				<div onclick="scroll('quienes_somos');" class="menu_item menu_item_nosotros">QUIÉNES SOMOS</div>
				<div onclick="scroll('filosofia');" class="menu_item menu_item_nosotros">FILOSOFÍA</div>
				<div onclick="scroll('equipo');" class="menu_item menu_item_nosotros">NUESTRO EQUIPO</div>
				<div onclick="scroll('experiencia');" class="menu_item menu_item_nosotros">EXPERIENCIA</div>
				<div onclick="scroll('asociados');" class="menu_item menu_item_nosotros">ASOCIADOS</div>
				<div onclick="scroll('oportunidad');" class="menu_item menu_item_nosotros ultimo">OPORTUNIDAD</div>
			</div>
		</div>

</section>

<section id="quienes_somos">
	<img src="<?php echo $this->webroot; ?>img/edificio.jpg">
  <div id="somos_texto">
    <img src="<?php echo $this->webroot; ?>img/logo_negro_2.png">
      <p>
        Para invertir en bienes raíces es importante tener un equipo multidisciplinario que origine, administre y se comunique con los inversionistas adecuadamente.
      </p>
    </div>
</section>

<section id="content_nosotros">

<section id="filosofia">
	
	<div class="titulo">
		<h1 id="titulo_filosofia"><div class="rayita_izquierda ray_nos"></div>FILOSOFÍA</h1>
	</div>
	<div class="row">
		<div class="cont_filosofia">
			<div class="filosofia_item">
				<img class="icon_filosofia" src="<?php echo $this->webroot; ?>img/filosofia_money.png">
				<p>Bricks es un concepto desarrollado por  profesionales del área inmobiliaria para democratizar el acceso a inversionistas; que antes no tenían capacidad  por el monto de la inversión a este tipo de activos, teniendo rendimientos y proyectos que solo tienen acceso inversionistas institucionales.</p>
				<img class="suspensivos" src="<?php echo $this->webroot; ?>img/suspensivos.jpg">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="cont_filosofia_2">
			<div class="filosofia_item" style="float:left;">
				<img class="icon_filosofia" src="<?php echo $this->webroot; ?>img/filosofia_book.png">
				<p>Bricks cuenta con un protocolo muy específico de originación de proyectos de inversión, usando tecnología de clase mundial como el software ARGUS para la evaluación de proyectos y un comité de inversiones que analiza las oportunidades para la adecuada selección de las mismas.</p>
				<img class="suspensivos" src="<?php echo $this->webroot; ?>img/suspensivos.jpg"></div>
			<div class="filosofia_item" style="float:right;">
				<img class="icon_filosofia" src="<?php echo $this->webroot; ?>img/filosofia_graph.png"><p>Para invertir en bienes raíces es importante tener un equipo multidisciplinario que origine, administre y se comunique con los inversionistas adecuadamente.</p>				
        <img class="suspensivos" src="<?php echo $this->webroot; ?>img/suspensivos.jpg"></div>
		</div>
		</div>
</section>

<section id="equipo">
	
	<div class="titulo">
		<h1 id="titulo_equipo"><div class="rayita_izquierda ray_nos"></div>NUESTRO EQUIPO</h1>
	</div>
	<p>Nuestro equipo está conformado por expertos provenientes de diversos ámbitos profesionales, tales como bienes raíces, tecnología, finanzas, mercadeo y arquitectura, entre otros.</p>

	
<div class="wrapper-with-margin">
  <div id="owl-demo" class="owl-carousel">
    <?php foreach ($equipos as $item) { ?>
      <div class="item">
      	<div class="item_img">
  	    	<img src="<?php echo $this->webroot; ?>files/<?php echo $item['Equipo']['imagen']; ?>">
  	    	<div class="mask" onclick="window.open('<?php echo $item['Equipo']['linkedin']; ?>','_blank');">
  	    		<img class="link_icon" src="<?php echo $this->webroot; ?>img/linkedin.jpg">
  	    	</div>
  	    </div>
      	<div class="item_nombre">
      		<p><?php echo $item['Equipo']['nombre']; ?></p>
      		<h2><?php echo $item['Equipo']['cargo']; ?></h2>
      		<img class="rayita_horizontal" src="<?php echo $this->webroot; ?>img/raya_horizontal.png">
      	</div>
      </div>
    <?php } ?>
	</div>
</div>
</section>	

<section id="experiencia">
      
	<div class="titulo">
		<h1 id="titulo_experiencia"><div class="rayita_izquierda ray_nos"></div>EXPERIENCIA</h1>
	</div>
    <div class="experiencia_content">
      <div class="experiencia_item impar first">
        <p class="nums" id="money_item">25.000</p>
        <img src="<?php echo $this->webroot; ?>img/item4.png"></img>
        <p>US$ como el monto mínimo de inversión.</p>
      </div>
      <div class="experiencia_item par">
        <p class="nums" id="team_item">60</p>
        <img src="<?php echo $this->webroot; ?>img/item3.png">
        <p>Años de experiencia combinada.</p>
      </div>
      <div class="experiencia_item impar last">
        <p class="nums" id="graph_item">9%</p>
        <img src="<?php echo $this->webroot; ?>img/item2.png">
        <p>Tasa Interna de Retorno (TIR) promedio..</p>
      </div>
    </div>
    <!-- <div class="experiencia_item impar first">
      <p class="nums" id="money_item">6200</p>
      <img src="<?php echo $this->webroot; ?>img/item4.png"></img>
      <p>Bricks Asset Management LLC. nace de la necesidad de los inversionistas.</p>
    </div>
    <div class="experiencia_item par">
      <p class="nums" id="team_item">450</p>
      <img src="<?php echo $this->webroot; ?>img/item3.png">
      <p>Bricks Asset Management LLC. nace de la necesidad de los inversionistas.</p>
    </div>
    <div class="experiencia_item impar">
      <p class="nums" id="graph_item">1300</p>
      <img src="<?php echo $this->webroot; ?>img/item2.png">
      <p>Bricks Asset Management LLC. nace de la necesidad de los inversionistas.</p>
    </div>
    <div class="experiencia_item par last">
      <p class="nums" id="percent_item">976</p>
      <img src="<?php echo $this->webroot; ?>img/item1.png">
      <p>Bricks Asset Management LLC. nace de la necesidad de los inversionistas.</p>
    </div> -->

    <div id="experiencia_extract">
      Bricks ofrece <b style="color:#d9882f;">inversiones patrimoniales en inmuebles comerciales, enfocado a pequeños inversionistas que no tienen acceso a las inversiones ofrecidas solo para grandes inversionistas</b> a través de un proceso de selección de inversiones de tipo institucional.
    </div>

    <p class="experiencia_parrafo">
    	Bricks Asset Management LLC está formado por un equipo multidisciplinario con más de 50 años de experiencia combinada en desarrollos de bienes raíces en México y Estados Unidos. Nuestra empresa nace de la necesidad de los inversionistas de tener un portafolio de bienes raíces de primera calidad, bien administrado y que genere un auténtico valor a su patrimonio
    </p>

</section>
</section>

<!-- <section id="asociados">
	<div class="titulo">
		<h1 id="titulo_asociados"><div class="rayita_izquierda ray_nos"></div>ASOCIADOS</h1>
	</div>
	<img src="<?php echo $this->webroot; ?>img/asociados.jpg">
</section> -->

<section id="oportunidad">
	<div class="titulo">
		<h1 id="titulo_oportunidad"><div class="rayita_izquierda ray_nos"></div>OPORTUNIDAD</h1>
	</div>
	
	
	<p><b id="buscamos">BUSCAMOS BROKERS INMOBILIARIOS</b><br>
		Para las mejores inversiones de rentas en Estados Unidos.
	</p>
  <button class="bricks_btn small_btn_blue" onclick="window.location.href='<?php echo $this->webroot;?>contacto'" type="button">Contáctanos</button>
</section>	

<script type="text/javascript">

  $(window).resize(function() { 
    if($(window).width() <= 850){
      $('.par').addClass('der');
      $('.impar').addClass('izq');
    }else{
      $('.par').removeClass('der');
      $('.impar').removeClass('izq');
    }
  });

  $(document).ready(function(){     
  });

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
            items:3,
            nav:true,
            loop:false
        }
    }
});

  $('.item').hover(function() {
  	$(this).find('.mask').css('display', 'block');
  }, function() {
  	$(this).find('.mask').css('display', 'none');
  });


  if($(window).width() <= 850){
    $('.par').addClass('der');
    $('.par').removeClass('last');
    $('.impar').addClass('izq');
  }else{
    $('.par').removeClass('der');
    $('.impar').removeClass('izq');
  }

});

function scroll(selector) {
	if($('#menu_nosotros').hasClass('fixed')){
		$('body').scrollTo('#'+selector,900,{offset:-135});
	}else{
		$('body').scrollTo('#'+selector,900,{offset:-170});
	}
}

var plg = 0;
$(document).scroll(function(event) {
	if(!$('#punto').is_on_screen()){
		$('#menu_nosotros').addClass('fixed');
	}else{
		$('#menu_nosotros').removeClass('fixed');
	}

  if( $('#experiencia').is_on_screen() && plg == 0) { 
    setInterval('imprimir()',50);
    plg++;
  }
});


var num_1 = 0;
var num_2 = 0;
var num_3 = 0;
var num_4 = 0;
function imprimir() {
  if(num_1 <= 25){
    $('#money_item').html(num_1+'.000');
    num_1++;
  }
  if(num_2 <= 60){
    $('#team_item').html(num_2);
    num_2++;
  }
  if(num_3 <= 9){
    $('#graph_item').html(num_3+'<span>%</span>');
    num_3++;
  }
  // if(num_4 <= 976){
  //   $('#percent_item').html(num_4);
  //   num_4++
  // }
}


</script>