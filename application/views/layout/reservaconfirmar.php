        <div class="container">
            <div class="row">
                <div class=" offset-2  col-8">
                     <form id="confirmareserva" action="#" method="post">
                        <!-- inforeserva-->
                        <div class="inforeserva">
                            <div class="cab">
                                <?php if($info->id_categoria_traslado == 1 ):?>
                                <span class="title">Aeropuerto - Hotel - Aeropuerto</span>
                                <?php else:?>
                                <span class="title">Excursion</span>
                                <?php endif;?>
                                
                            </div>
                            <div class="cuerpo">
                                <p>
                                <?php if($info->tipo_traslado_rd == 1 ):?>
                                <b>Tipo de Traslado:</b> Servicio sencillo<br>
                                <?php else:?>
                                <b>Tipo de Traslado:</b> Servicio redondo<br>
                                <?php endif;?>
                                
                                <b>Origen:</b>  <?php echo $info->origen;?><br>
                                <b>Fecha llegada:</b> <?php echo $info->fecha_llegada;?><br>
                                </p>
                                <p>
                                <b>Pax:</b> <?php echo $info->pax;?><br>
                                <b>Destino:</b> <?php echo $info->nombre_del_destino;?><br>
                                <b>Fecha salida:</b>  <?php echo $info->fecha_salida;?><br>
                                <b>Total:</b> $ <?php echo $info->total;?>MNX  <br> 
                                </p>
                            </div>   
                            <div class="clearfix"></div>
                        </div>
                        <!-- inforeserva--> 
                         <!-- inforeserva-->
                         <div class="inforeserva">
                            <div class="cab">
                                <span class="title">Datos personales</span> 
                            </div>
                            <div class="cuerpo">
                                <div class="alineainput">
                                    <label>*Nombre completo</label>
                                    <input  name="nombre_completo" required/>     
                                </div>   
                                <div class="alineainput">
                                    <label>*Correo</label>
                                    <input id="correo" name="correo" type="email" required/>     
                                </div> 
                                <div class="alineainput">
                                    <label>*Telefono con LADA</label>
                                    <input name="telefono" required/>     
                                </div> 
                            </div> 
                            <div class="clearfix"></div>
                        </div>
                        <!-- inforeserva-->
                        <?php if($info->id_categoria_traslado == 2 ):?>
                         <!-- inforeserva-->
                         <div class="inforeserva">
                            <div class="cab">
                                <span class="title">Datos para tu traslado: Excursion</span> 
                            </div>
                            <div class="cuerpo">
                               
                                <div class="alineainput">
                                    <label>Hora de salida</label>
                                    <input name="hora_llegada_ll"/>     
                                </div>
                                <div class="clearfix"></div>
                                <div class="cuerpo">
                                    <div class="alineainput">
                                        <label>* Hotel , favor de especificar nombre completo</label>
                                        <input name="hotel_hospeda" required/>     
                                    </div>   
                                    <div class="alineainput">
                                        <label>*No de habitación</label>
                                        <input name="no_habitacion" type="text" required/>     
                                    </div> 
                                    <div class="alineainput">
                                        <label>*¿viaja con niños menores de 3 años?</label>
                                        <input name="ninos" required/>     
                                    </div> 
                                </div> 
                                <div class="clearfix"></div>
                                <div class="alineatxt">
                                    <label>Tiene algún requerimiento especial durante su traslado?</label>
                                    <textarea name="comentarios_ll" ></textarea>
                                </div>
                                <div class="clearfix"></div>
                                <span>Descripción de como estas vestido, algún detalle que quieres que sepan nuestros operadores</span> 
                            </div>   
                            <div class="clearfix"></div>
                        </div>
                        <!-- inforeserva-->
                        <?php endif;?>
                        <?php if($info->id_categoria_traslado == 2 ):?>
                        <?php if($info->tipo_traslado_rd == 2 ):?>
                        <!-- inforeserva-->
                        <div class="inforeserva">
                            <div class="cab">
                                <span class="title">PARA SERVICIO REDONDO</span> 
                            </div>
                            <div class="cuerpo">
                                <div class="alineainput">
                                    <label>Punto u hotel de regreso</label>
                                    <input name="punto_hotel_regreso"/>     
                                </div>   
                                <div class="alineainput">
                                    <label>Hora De regreso</label>
                                    <input name="hora_llegada_s"/>     
                                </div>
                                <div class="clearfix"></div>
                                <div class="alineatxt">
                                    <label>Comentarios</label>
                                    <textarea name="comentarios_s"></textarea>
                                </div>
                                <div class="clearfix"></div>
                                <span>Descripción de como estas vestido, algún detalle que quieres que sepan nuestros operadores</span> 
                            </div>   
                            <div class="clearfix"></div>
                        </div>
                        <!-- inforeserva--> 
                        <?php endif;?>
                        <?php endif;?>  

                        <?php if($info->id_categoria_traslado == 1 ):?>
                         <!-- inforeserva-->
                         <div class="inforeserva">
                            <div class="cab">
                                <span class="title">Datos para tu traslado: LLegada</span> 
                            </div>
                            <div class="cuerpo">
                                <div class="alineainput">
                                    <label>Vuelo</label>
                                    <input name="vuelo_ll"/>     
                                </div>   
                                <div class="alineainput">
                                    <label>Aerolínea</label>
                                    <input name="aerolinea_ll" />     
                                </div> 
                                <div class="alineainput">
                                    <label>Hora De Llegada</label>
                                    <input name="hora_llegada_ll"/>     
                                </div>
                                <div class="clearfix"></div>
                                <div class="cuerpo">
                                    <div class="alineainput">
                                        <label>*  Hotel , favor de especificar nombre completo</label>
                                        <input name="hotel_hospeda" required/>     
                                    </div>   
                                    <div class="alineainput">
                                        <label>*No de habitación</label>
                                        <input name="no_habitacion" type="text" required/>     
                                    </div> 
                                    <div class="alineainput">
                                        <label>*¿viaja con niños menores de 3 años?</label>
                                        <input name="ninos" required/>     
                                    </div> 
                                </div> 
                                <div class="clearfix"></div>
                                <div class="alineatxt">
                                    <label>Tiene algún requerimiento especial durante su traslado?</label>
                                    <textarea name="comentarios_ll" ></textarea>
                                </div>
                                <div class="clearfix"></div>
                                <span>Descripción de como estas vestido, algún detalle que quieres que sepan nuestros operadores</span> 
                            </div>   
                            <div class="clearfix"></div>
                        </div>
                        <!-- inforeserva-->
                        <?php endif;?>
                        
                        <?php if($info->id_categoria_traslado == 1 ):?>
                        <?php if($info->tipo_traslado_rd == 2 ):?>
                        <!-- inforeserva-->
                        <div class="inforeserva">
                            <div class="cab">
                                <span class="title">Datos para tu traslado: salida</span> 
                            </div>
                            <div class="cuerpo">
                                <div class="alineainput">
                                    <label>Vuelo</label>
                                    <input name="vuelo_s"/>     
                                </div>   
                                <div class="alineainput">
                                    <label>Aerolínea</label>
                                    <input name="aerolinea_s"/>     
                                </div> 
                                <div class="alineainput">
                                    <label>Hora De Salida</label>
                                    <input name="hora_llegada_s"/>     
                                </div>
                                <div class="clearfix"></div>
                                <div class="alineatxt">
                                    <label>Comentarios</label>
                                    <textarea name="comentarios_s"></textarea>
                                </div>
                                <div class="clearfix"></div>
                                <span>Descripción de como estas vestido, algún detalle que quieres que sepan nuestros operadores</span> 
                            </div>   
                            <div class="clearfix"></div>
                        </div>
                        <!-- inforeserva--> 
                        <?php endif;?>
                        <?php endif;?> 
                        <div class="clearfix"></div>
                        <!--sirve para enviar el formulario serializado-->                        
                        <input type="hidden" name="id" value="<?php echo $this->uri->segment(2); ?>" />

                        <div id="paypal-button"></div>
                        <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                        <script>
                        var paypalActions;    
                        paypal.Button.render({
                        env: '<?php echo PayPalENV; ?>',
                        client: {
                            <?php if(ProPayPal) { ?>  
                            production: '<?php echo PayPalClientId; ?>'
                            <?php } else { ?>
                            sandbox: '<?php echo PayPalClientId; ?>'
                            <?php } ?>  
                        },
                        // Called when page displays
                        validate: function(actions) {
                            console.log("validate called");
                            actions.disable(); // Allow for validation in onClick()
                            paypalActions = actions; // Save for later enable()/disable() calls
                        },    
                        onClick: function(e) {

                            var msgErrors = 0;
                            var datos;
                            datos =$('#confirmareserva').serializeArray();
                            console.log(datos)
                            $.post( "<?php echo base_url()?>welcome/guardaReserva", datos ,function( data ) {
                                paypalActions.enable();
                            // window.location.href = url+data;
                            });
            

                          
                           
                        },
                        payment: function (data, actions) {
                            return actions.payment.create({
                            transactions: [{
                                amount: {
                                total: '<?php echo $info->total;?>',
                                currency: 'MXN'
                                }
                            }]
                            });
                        },
                        
                        onAuthorize: function (data, actions) {
                            return actions.payment.execute()
                            .then(function () {
                                var cor= $('#correo').val
                                window.location = "<?php echo base_url()?>reservaFinalizada?paymentID="+data.paymentID+"&payerID="+data.payerID+"&token="+data.paymentToken+"&correo="+cor+"&pid=<?php echo $info->token;?>";
                            });
                        }
                        }, 
                        
                        '#paypal-button');
                        </script>
                        <div class="clearfix"></div>
                    </form>   
                </div>                    
            </div>
        </div>