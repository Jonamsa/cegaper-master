    <footer id="footer">
        <div class="borde-footer"></div>
        <div class="contenido-footer">
            <div class="container">
                <div class="five columns">
                    <div class="caja-footer">
                        <p><a href="<?php echo base_url()?>cancun">Home</a></p>
                        <p><a href="<?php echo base_url()?>cancun/nosotros">Nosotros</a></p>
                        <p><a href="/">Nuestras oficinas</a></p>
                    </div>
                    <div class="caja-footer">
                        <p><a href="<?php echo base_url()?>cancun/servicios">Servicios</a></p>
                        <p><a href="<?php echo base_url()?>cancun/contacto">Contacto</a></p>
                    </div>
                </div>
                <div class="five columns">
                    <div class="boletin">
                        <h4>Subscríbete a nuestro Newsletter</h4>
                        <form id="envia-boletin" action="<?php echo base_url()?>suscribete/newsletter" method="post">
                            <input type="email" class="large-input" placeholder="E-mail" name="email" id="email">
                            <input type="submit" class="suscribe" value="Enviar">
                        </form>
                        <h5>Al suscribirte aceptas <span>nuestros <a href="<?php echo base_url()?>politicas" class="link-inverse">Términos y Condiciones</a></span></h5>
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
                    <p>Transportadora Cegaper ® Todos los derechos reservados |  <a class="link-all" href="/politicas" target="_blank">Políticas de Venta </a> | <a class="link-all" href="/aviso_privacidad" target="_blank">Aviso de Privacidad </a>  </p>
                    
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
    $(function(){

        /*guarda_reserva*/

        $(".confirmaReserva").click(function(){

            event.preventDefault()
            $(this).hide();
            var url="<?php echo base_url()?>confirmareserva/"
            var datos;
            datos =$(this).parent().serializeArray();
            $.post( "<?php base_url()?>welcome/clientesForm", datos ,function( data ) {
                window.location.href = url+data;
            });
        })

       


    })
    </script>

      <script type="text/javascript">
      $(function(){

        
      from = $( "#from" )
        .datepicker({
            dateFormat: 'yy-mm-dd',
          defaultDate: "+2d",
          minDate: 0,
          numberOfMonths: 2
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        dateFormat: 'yy-mm-dd',
        defaultDate: "+1d",
        numberOfMonths: 2
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 

      $( "#from2" )
        .datepicker({
            dateFormat: 'yy-mm-dd',
          defaultDate: "+2d",
          minDate: 0,
          numberOfMonths: 2
        })

    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }

    /*determina la tab actitva*/
        $( "#tabs" ).tabs({ 
        <?php if(@$_POST["id_categoria_traslado"]=="2"):?>
        active: 1
        <?php else:?> 
        active: 0
        <?php endif;?>
            
           
        });
        $( "#accordion" ).accordion();


        $( "#from2" ).datepicker({dateFormat: 'yy-mm-dd'});

      

         if($("#tipo_traslado").val()==1){
            $('#tof').removeClass( "fech2_s");  
         }   
         else{
            $('#tof').addClass( "fech2_s");
         }

        $("#tipo_traslado").change(function(){

            if($(this).val()!=1){
                  $('#tof').addClass( "fech2_s");  
            }
            else{
                $('#tof').removeClass( "fech2_s");  
            }
           
        });    
         
      })
      </script>
    <script>



// Traducción al español

  $(function() {

      
  });
  </script> 
    <script src="<?php echo base_url()?>public/assets/sweetalert-master/dist/sweetalert.min.js"></script>
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
               
            });


          
        });
    /*------------------------------*/

    </script>

    <script src="<?php echo base_url()?>public/assets/validate/jquery.validate.min.js"></script>
    </body>
</html>
