    <footer id="footer">
        <div class="borde-footer"></div>
        <div class="contenido-footer">
            <div class="container">
                <div class="five columns">
                    <div class="caja-footer">
                        <p><a href="<?php echo base_url()?>cuernavaca">Home</a></p>
                        <p><a href="<?php echo base_url()?>cuernavaca/nosotros">Nosotros</a></p>
                        <p><a href="<?php echo base_url()?>">Nuestras oficinas</a></p>
                    </div>
                    <div class="caja-footer">
                        <p><a href="<?php echo base_url()?>cuernavaca/servicios">Servicios</a></p>
                        <p><a href="<?php echo base_url()?>cuernavaca/contacto">Contacto</a></p>
                    </div>
                </div>
                <div class="five columns">
                    <div class="boletin">
                        <h4>Subscríbete a nuestro Newsletter</h4>
                        <form id="envia-boletin" action="<?php echo base_url()?>suscribete/newsletter" method="post">
                            <input type="email" class="large-input" placeholder="E-mail" name="email" id="email">
                            <input type="submit" class="suscribe" value="Enviar">
                        </form>
                        <h5>Al suscribirte aceptas <span>nuestros <a href="/politicas" class="link-inverse">Términos y Condiciones</a></span></h5>
                    </div>
                </div>
                <div class="two columns">
                    <div class="red-texto">
                        <p>Siguenos en:</p>
                    </div>
                    <div class="clearfix"></div>
                    <a class="face-bottom" target="_blank" href="https://www.facebook.com/cegapercancunoficial/?fref=ts"></a>
                    <a class="twitt-bottom" target="_blank" href="https://twitter.com/CancunCegaper?lang=es"></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="footer-parrafo">
            <div class="container container-twelve">
                <div class="eight columns offset-by-two">
                    <p>Transportadora Cegaper ® Todos los derechos reservados 2015 - 2016  |  <a class="link-all" href="/politicas" target="_blank">Términos y Condiciones </a> |  <a class="link-all" href="<?php echo base_url()?>aviso_privacidad" target="_blank">Aviso de Privacidad </a> </p>
                    
                </div>
            </div>
        </div>
    </footer>


<script id="addJS">jQuery(document).ready(function($) {
  $('#full-width-slider').royalSlider({
    arrowsNav: true,
    loop: true,
    keyboardNavEnabled: true,
    controlsInside: false,
    imageScaleMode: 'fill',
    arrowsNavAutoHide: false,
    autoScaleSlider: true, 
    autoScaleSliderWidth: 960,     
    autoScaleSliderHeight: 350,
    controlNavigation: 'bullets',
    thumbsFitInViewport: false,
    navigateByClick: true,
    startSlideId: 0,
    autoPlay: false,
    transitionType:'move',
    globalCaption: false,
    deeplinking: {
      enabled: true,
      change: false
    },
    /* size of all images http://help.dimsemenov.com/kb/royalslider-jquery-plugin-faq/adding-width-and-height-properties-to-images */
    imgWidth: 1400,
    imgHeight: 680
  });
});
</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  
  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

	    <script type="text/javascript">

			$(document).ready(function(){

				
				

			});
			
		</script>
		<script>
// Traducción al español
$(function($){
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'yy-mm-dd',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
});

  </script> 
		<script src="<?php echo base_url()?>public/assets/sweetalert-master/dist/sweetalert-dev.js"></script>
		<script type="text/javascript">
        $(document).ready(function() {
            jQuery.fn.reset = function () {
                $(this).each (function() { this.reset(); });
            }
            /*------------------------------*/
            $('#envia-boletin').submit(function() {
                if($("#email").val() ==''){
                    sweetAlert("Oops...", "El email es requerido", "error");
                    return false;
                }

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success: function(data) {
                        //$('#result').html(data);
                        if(data == 1){
                            swal("Datos enviados", "Gracias por suscribirte", "success")
                            $("#envia-boletin").reset();
                            }
                        else {
                             sweetAlert("Oops...", "Ocurrió un error", "error");  
                        } 
        
                    }
                })
                
                return false;
                //location.reload(true);
                //location.reload(true);
            });
            
            /*------------------------------*/
             /*------------------------------*/
            $('#form-contacto').submit(function() {
                if($("#email").val() ==''){
                    sweetAlert("Oops...", "El email es requerido", "error");
                    return false;
                }
                if($("#nombre").val() ==''){
                    sweetAlert("Oops...", "El email es requerido", "error");
                    return false;
                }
                if($("#ciudad").val() ==''){
                    sweetAlert("Oops...", "El email es requerido", "error");
                    return false;
                }
                if($("#tel").val() ==''){
                    sweetAlert("Oops...", "El email es requerido", "error");
                    return false;
                }

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success: function(data) {
                        //$('#result').html(data);
                        if(data == 1){
                            swal("Datos enviados", "Gracias por contactarnos, en breve nos comunicaremos contigo", "success")
                            $("#form-contacto").reset();
                            }
                        else {
                             sweetAlert("Oops...", "Ocurrió un error", "error");  
                        } 
        
                    }
                })
                
                return false;
                //location.reload(true);
                //location.reload(true);
            });








        });
    /*------------------------------*/

    </script>

            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>


        
              <script type="text/javascript">
       
        function initialize() {
        var latlng = new google.maps.LatLng(18.9589364,-99.2334871,17);
        var settings = {
          zoom: 15,
          center: latlng,
          mapTypeControl: false,
          mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
          navigationControl: true,
          disableDefaultUI: true,
          scrollwheel: false,
          navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
          mapTypeId: google.maps.MapTypeId.ROADMAP
        ,styles: [{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]}]        };
        
        
        var map = new google.maps.Map(document.getElementById("map"), settings);
        
    
                
            
        
        var infowindow0 = new google.maps.InfoWindow({
          content: "Privada Aurora No 12, Col. Ampliación Chipitlan, CP 62070"
        });
        
        var companyPos0 = new google.maps.LatLng(18.9589364,-99.2334871,17);
        
        var companyImage0 = new google.maps.MarkerImage('/public/assets/images/puntero.png',
          new google.maps.Size(100,50),
          new google.maps.Point(0,0),
          new google.maps.Point(50,50)
        );


        var companyMarker0 = new google.maps.Marker({
          position: companyPos0,
          map: map,
          icon: companyImage0,
          title:"Privada Aurora No 12, Col. Ampliación Chipitlan, CP 62070 ",
          zIndex: 3});
          
        google.maps.event.addListener(companyMarker0, 'click', function() {
          infowindow0.open(map,companyMarker0);
        }); 
                
            
        
        
             
        
      }
    </script>

  	</body>
</html>
