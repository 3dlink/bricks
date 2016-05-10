<style type="text/css">
.owl-next{
  right: 10%;
}
.owl-prev{
  left: 10%;
}
</style>
<section id="inicio">
<div class="home-with-margin">
  <div id="owl-demo" class="owl-carousel">
    <?php foreach ($slider_ppal as $item) {?>
      <div class="item">
        <img src="<?php echo $this->webroot;?>files/<?php echo $item['Home']['image'];?>" alt="First slide">
        <div class="slider_desc">
          <img src="<?php echo $this->webroot; ?>img/logo_slider.png">
          <p>
            <?php echo $item['Home']['text'];?>
          </p>
          <div class="bottom_flip flip">
            <div class="flip_items">
              <div class="box front"><button class="slider_btn bricks_btn" type="button" onclick="window.location.href='<?php echo $this->webroot;?>nosotros'">READ MORE</button></div>
              <div class="box back"><button class="slider_btn bricks_btn" type="button" onclick="window.location.href='<?php echo $this->webroot;?>nosotros'">READ MORE</button>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    <?php } ?>
  </div>
</div>
</section>

<section id="fondo_home" class="row">
  <div class="col-md-12" id="quienes_somos_home">
    <div id="logo_quienessomos" class="col-md-4">
      <img src="<?php echo $this->webroot; ?>img/logo_negro.png">
    </div>
    <div id="quienes_somos_home_desc" class="col-md-8">
      <div class="rayita_izquierda"></div>
      <h1>ABOUT US</h1>
      <p>Bricks Asset Management LLC. born from the need of Latin American investors have diversified and well managed its portfolio in real estate in the United States , specializing in market south east " Florida, Georgia and Texas."</p>
      <div class="bottom_flip flip">
        <div class="flip_items">
          <div class="box front"><button class="bricks_btn small_btn" type="button" onclick="window.location.href='<?php echo $this->webroot;?>nosotros'">See more</button></div>
          <div class="box back"><button class="bricks_btn small_btn" type="button" onclick="window.location.href='<?php echo $this->webroot;?>nosotros'">See more</button>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <div id="como_funciona_home" class="col-md-12">
    <div id="texto_como_funciona" class="col-md-6">
      <div class="rayita_derecha"></div>
      <h1>HOW IT WORKS</h1>
        <div style="width:100%;float:left;">
          <div class="items_como_funciona izq">
            <p class="numeros_como_funciona">- 1 -</p>
            <p>
              The investor is registered and accept the terms and conditions regarding the origin of funds
            </p>
          </div>
          <div class="items_como_funciona der">
            <p class="numeros_como_funciona">- 2 -</p>
            <p>
              The investor selects the investment interests and contacts with the team Bricks to see the best investment strategy
            </p>
          </div>
        </div>
        <div style="width:100%;float:left;">
          <div class="items_como_funciona izq">
            <p class="numeros_como_funciona">- 3 -</p>
            <p>
              Complete and sign the documents and make the deposit in the escrow account
            </p>
          </div>
          <div class="items_como_funciona der">
            <p class="numeros_como_funciona">- 4 -</p>
            <p>
            A month later, starts to enjoy your income
            </p>
          </div>
        </div>
    </div>
    <div id="videos_como_funciona" class="col-md-6">
      <?php $id = split("https://youtu.be/",$videos[0]['Video']['video']);?>
      <iframe id="video_grande" style="width:100%;" height="260" src="https://www.youtube.com/embed/<?php echo $id[1]; ?>" frameborder="0" allowfullscreen></iframe>
      
      <div class="view-with-margin-v">
        <div id="owl-demo-v" class="owl-carousel">
          <?php foreach ($videos as $video) { ?>
            <div class="item item_videos">
              <?php $id = split("https://youtu.be/",$video['Video']['video']);?>
              <img video="https://www.youtube.com/embed/<?php echo $id[1]; ?>" src="https://img.youtube.com/vi/<?php echo $id[1]; ?>/1.jpg">
            </div>
          <?php } ?>
        </div>
      </div> 
    </div>
  </div>

  <div id="experiencia_home" class="col-md-12">
    <div class="titulo">
      <h1 id="titulo_experiencia"><div class="rayita_izquierda ray_nos"></div>EXPERIENCE</h1>
    </div>
    <div class="experiencia_content">
      <div class="experiencia_item impar first">
        <p class="nums" id="money_item">25.000</p>
        <img src="<?php echo $this->webroot; ?>img/item4.png"></img>
        <p>US$ as the minimum investment amount.</p>
      </div>
      <div class="experiencia_item par">
        <p class="nums" id="team_item">60</p>
        <img src="<?php echo $this->webroot; ?>img/item3.png">
        <p>years of combined experience.</p>
      </div>
      <div class="experiencia_item impar last">
        <p class="nums" id="graph_item">9%</p>
        <img src="<?php echo $this->webroot; ?>img/item2.png">
        <p>internal rate of return average.</p>
      </div>
    </div>
  </div>

  <div id="frases">
     <div id="carousel_frases" class="carousel slide" data-ride="carousel">
      
      <div class="carousel-inner">
        <?php foreach ($testimonios as $key => $value) { ?>
          <div class="item <?php if($key==0) echo 'active'; ?>">
            <div class="carousel-caption">
                <p>"<?php echo $value['Testimonio']['testimonio']; ?>"</p>
                <p class="firma_cliente"><?php echo $value['Testimonio']['autor']; ?></p>
            </div>
          </div>
        <?php } ?>
          
      </div>
      
      </div>

  </div>

  <div id="contact" class="row">
    <h1>CONTACT US</h1>
    <div class="col-md-6" id="direccion">
      <div class="col-md-12 icons">
        <img class="iconos" src="<?php echo $this->webroot;?>img/dir_icon.png">
        <p style="margin-top: -2px;">Miami 1221 Brickell Ave. Suite 710 Miami, Fl 33131 <br><br>Insurgentes Sur 1877, oficina 202, Col. Gpe Inn, Deleg. Álvaro Obregón, C.P. 01020, México DF</p>
      </div>
      <div class="col-md-12 icons">
        <img class="iconos" src="<?php echo $this->webroot;?>img/tel_icon.png">
        <p style="font-weight:bold;">
          +305 4593070 <br>
          +52 55 56441842 
        </p>
      </div>
      <div class="col-md-12 icons">
        <img class="iconos" src="<?php echo $this->webroot;?>img/cor_icon.png">
        <p style="font-weight:bold;">
          info@bricksusa.com
        </p>
      </div>
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control inputs" placeholder="Name" id="name">
      <input type="email" class="form-control inputs" placeholder="Email" id="email">
      <input type="number" class="form-control inputs" placeholder="Phone" id="phone">
      <input type="text" class="form-control inputs" placeholder="Country" id="country">
      <textarea class="form-control inputs col-xs-12" placeholder="Message" cols="30" rows="10" id="cuestion"></textarea>
      <button id="enviar" class="bricks_btn small_btn col-xs-12" type="button">SEND</button>
    </div>
  </div>

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


$(document).ready(function() {

  if($(window).width() <= 850){
    $('.par').addClass('der');
    $('.par').removeClass('last');
    $('.impar').addClass('izq');
  }else{
    $('.par').removeClass('der');
    $('.impar').removeClass('izq');
  }

  $('#owl-demo').owlCarousel({
    loop:true,
    responsiveClass:true,
    nav:true,
    navText: [
      "<img class='arrow-home' src='<?php echo $this->webroot; ?>img/arrow-left.png'>",
      "<img class='arrow-home' src='<?php echo $this->webroot; ?>img/arrow-right.png'>"
      ],
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:true,
            loop:false
        }
    }
});

  $('#owl-demo-v').owlCarousel({
    margin:15,
    responsiveClass:true,
    nav:true,
    navText: [
      "<img class='arrow-home-v' src='<?php echo $this->webroot; ?>img/arrow-left-black.png'>",
      "<img class='arrow-home-v' src='<?php echo $this->webroot; ?>img/arrow-right-black.png'>"
      ],
    responsive:{
        0:{
            items:3,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
  });






  $('#carousel_frases').carousel({
      interval:   6000
  });


  $('#enviar').click(function(){

    if($('#email').val() == "" || $('#cuestion').val() == "" || $('#name').val() == "" ){
      alert('You must enter at least the name, email and content');
    }else{
      $('#enviar').html("Sending...");
      var data = {
        name : $('#name').val(),
        email : $('#email').val(),
        phone : $('#phone').val(),
        country : $('#country').val(),
        cuestion : $('#cuestion').val(),
      };

      $.post(WEBROOT+'start/sendMail',{data:data},function(data){
        if(data == 1){
            alert('Thank you. It has established contact with Bricks. We will contact you soon.');
            $('#enviar').html("Send");
        }
      },'json');
    }
  });

});
 
var plg = 0;
$(window).scroll(function(){ 
    if( $('#experiencia_home').is_on_screen() && plg == 0) { 
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

$('.item_videos').click(function() {
  $('#video_grande').attr('src', $(this).find('img').attr('video'));
});

</script>