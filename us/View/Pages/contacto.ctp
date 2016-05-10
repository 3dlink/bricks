

<section id="inicio_contacto">
	<img src="<?php echo $this->webroot; ?>img/contacto.png">

	<div id="titulo_contacto">
		<p id="titulo_img_contacto">Contact us /Toll Free:</p>
		<p>
      Miami: +305 4593070 <br>
			Mexico: +52 55 56441842
		</p>
	</div>

</section>

<section id="contactanos">
	<div id="contactanos_content">
	<div class="titulo">
		<h1 id="titulo_contactanos"><div class="rayita_izquierda ray_nos"></div>CONTACT US</h1>
	</div>
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

	<div id="gmap"></div>
</section>

<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
        var minZoomLevel = 15;
        function PropertiesMap() {

            /* Properties Array */
            var properties = [
                { title:"Bricks USA", lat:25.7612082,  lng:-80.1931688,   url:"property-details.html", }
				
				];

            /* Map Center Location - From Theme Options */
            var location_center = new google.maps.LatLng(properties[0].lat,properties[0].lng);

            var mapOptions = {
                scrollwheel: false,
                 zoom: minZoomLevel,
                 //center: new google.maps.LatLng(8.986645, -79.5178043),
                 center: new google.maps.LatLng(25.7612082, -80.1931688),

            }

            var map = new google.maps.Map(document.getElementById("gmap"), mapOptions);
            // var bounds = new google.maps.LatLngBounds();

            var markers = new Array();
            var info_windows = new Array();

            for (var i=0; i < properties.length; i++) {

                markers[i] = new google.maps.Marker({
                    position: new google.maps.LatLng(properties[i].lat,properties[i].lng),
                    map: map,
                    //icon: properties[i].icon,
                    title: properties[i].title,
                    animation: google.maps.Animation.DROP
                });

                // bounds.extend(markers[i].getPosition());

                info_windows[i] = new google.maps.InfoWindow({
                    content:    
                    '<div class="map-indicator">'+
                    '<img src="<?php echo $this->webroot; ?>img/logo_negro.png">'+
                      '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget sollicitudin dolor. </p>'+
                    '</div>'
                });
                attachInfoWindowToMarker(map, markers[i], info_windows[i]);
            }

            // map.fitBounds(bounds);

            /* function to attach infowindow with marker */
            function attachInfoWindowToMarker( map, marker, infoWindow ){
                google.maps.event.addListener( marker, 'click', function(){
                infoWindow.open( map, marker );
                });
                   google.maps.event.addListener(map, 'zoom_changed', function() {
                     if (map.getZoom() < minZoomLevel) map.setZoom(minZoomLevel);
                   });
            }

        }

        google.maps.event.addDomListener(window, 'load', PropertiesMap);


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

</script>