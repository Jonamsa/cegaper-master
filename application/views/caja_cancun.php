        
        <div class="container">
            <div class="row">
                <div class="col-4"> 
                    <div id="tabs">
                            <div id="booking-home">
                                <ul class="book-list-home">
                                    <li><a href="#book-home">Traslados</a></li>
                                    <li><a href="#book-home-2">Excursiones</a></li>
                                </ul>                            
                                <form id="book-home" method="post" action="<?php base_url()?>buscardisponibilidad">
                                    <div class="input-home-large">
                                        <label>Tipo de traslado</label>
                                        <select id="tipo_traslado" class="select"  name="tipo_traslado">
                                            <?php if($_POST):?>
                                            <?php if($_POST["tipo_traslado"]=="1"):?>
                                            <option value="1" selected>Servicio Sencillo</option>
                                            <?php else:?> 
                                            <option value="2" selected>Servicio Redondo </option>
                                            <?php endif;?>
                                            <?php endif;?>
                                            <option value="1">Servicio Sencillo</option>
                                            <option value="2">Servicio Redondo </option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="input-home-medium">
                                        <label>Fecha llegada</label>
                                        <input id="from" type="text" name="from" value="<?=@$_POST["from"]?>" autocomplete="off"  required>
                                    </div>
                                    
                                    <div id="tof" class="input-home-medium fech2_h" >
                                        <label>Fecha salida</label>
                                        <input id="to" type="text" name="to" value="<?=@$_POST["to"]?>" autocomplete="off">
                
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="input-home-large">
                                        <label>Origen</label>
                                        <select name="origen" class="select" >
                                            <option selected >Aeropuerto internacional de Cancún</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="input-home-large">
                                        <label>Destino</label>
                                        <select class="select" name="destino">
                                        
                                        <?php if($_POST):?>
                                        
                                        <?php foreach ($destinosAH as $destinos): ?>
                                        <?php if($_POST["destino"]==$destinos['id']):?>    
                                        <option selected value="<?php echo $destinos['id']; ?>"><?php echo $destinos['nombre_del_destino']; ?></option>
                                        <?php else:?>
                                        <option value="<?php echo $destinos['id']; ?>"><?php echo $destinos['nombre_del_destino']; ?></option>
                                        <?php endif;?>
                                        <?php endforeach; ?>

                                        <?php else:?>
                                        <?php foreach ($destinosAH as $destinos): ?>    
                                        <option value="<?php echo $destinos['id']; ?>"><?php echo $destinos['nombre_del_destino']; ?></option>
                                        <?php endforeach; ?>
                                        
                                        <?php endif;?>

                                        </select>
                                    </div>
                                    <div class="input-home-medium">
                                        <label>Pasajeros</label>
                                        <select class="select" id="adulto" name="pax">
                                            <?php if(@$_POST["pax"]):?>
                                            <option selected value="<?php echo $_POST["pax"];?>"><?php echo $_POST["pax"];?></option>
                                            <?php endif;?>
                                            <?php for($i=1;$i<54;$i++) { ?>
                                            <option value="<?php echo $i?>"><?php echo $i?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="btn-acciones">
                                    <input type="hidden" name="id_categoria_traslado" value="1"/>    
                                    <input type="hidden" name="zona" value="1" />
                                    <button type="submit" id="book-home-send" class="boton-home-book">Buscar</button>
                                    </div>
                                </form>
                                <form id="book-home-2" method="post" action="buscardisponibilidad">
                                    <div class="input-home-large">
                                        <label>Tipo de traslado</label>
                                        <select class="select"  name="tipo_traslado">
                                            <?php if($_POST):?>
                                            <?php if($_POST["tipo_traslado"]=="1"):?>
                                            <option value="1" selected>Servicio Sencillo</option>
                                            <?php else:?> 
                                            <option value="2" selected>Servicio Redondo </option>
                                            <?php endif;?>
                                            <?php endif;?>        
                                            <option value="1">Servicio Sencillo</option>
                                            <option value="2">Servicio Redondo </option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="input-home-large">
                                        <label>Hotel donde se hospeda</label>
                                        <input type="text" name="origen" value="<?php echo @$_POST["origen"]?>"  autocomplete="off"  required />
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="input-home-large">
                                        <label>Lugar de la Excursión</label>
                                        <select class="select" name="destino">
                                        <?php if($_POST):?>
                                        <?php foreach ($destinosE as $destinos): ?>
                                        <?php if($_POST["destino"]==$destinos['id']):?>    
                                        <option selected value="<?php echo $destinos['id']; ?>"><?php echo $destinos['nombre_del_destino']; ?></option>
                                        <?php else:?>
                                        <option value="<?php echo $destinos['id']; ?>"><?php echo $destinos['nombre_del_destino']; ?></option>
                                        <?php endif;?>
                                        <?php endforeach; ?>
                                        <?php else:?>
                                        <?php foreach ($destinosE as $destinos): ?>    
                                        <option value="<?php echo $destinos['id']; ?>"><?php echo $destinos['nombre_del_destino']; ?></option>
                                        <?php endforeach; ?>
                                        <?php endif;?>

                                        </select>
                                    </div>
                                    <div class="input-home-medium">
                                        <label>Fecha excursion</label>
                                        <input type="text" id="from2" name="from" value="<?php echo @$_POST["from"];?>" autocomplete="off" required>
                                    </div>
                                    
                                    <div class="input-home-medium">
                                        <label>Adultos</label>
                                        <select class="select" id="adultos" name="pax">
                                            <?php if(@$_POST["pax"]):?>
                                            <option selected value="<?php echo $_POST["pax"];?>"><?php echo $_POST["pax"];?></option>
                                            <?php endif;?>    
                                            <?php for($i=1;$i<54;$i++) { ?>
                                            <option value="<?php echo $i?>"><?php echo $i?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                
                                    <div class="clearfix"></div>
                                    <div class="btn-acciones">
                                        <input type="hidden" name="id_categoria_traslado" value="2"/>    
                                        <input type="hidden" name="zona" value="1" />
                                        <button type="submit" id="book-home-send2" class="boton-home-book">Buscar</button>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
                <div class="col-8">

                <?php //print_r($_POST);?>
                  <?php if($_POST):?>
                    
                  <?php foreach ($R as $r):?>
                  <? //print_r($R);?>
                  <div class="cont">
                      <img src="<?=base_url();?>public/assets/custom/images/cars/<?=$r['foto']?>" />
                      <p>
                          <b><?=$r['nombre']?></b><br> 
                          Es la opción ideal 
                            para llegar directo a su hotel <br>
                          <b> <?=$_POST["pax"]?> Pax</b>  <br>
                          <b style="font-size: 10px; font-weight:normal;">FOTO ILUSTRATIVA, LA UNIDAD PUEDE TENER VARIACIONES</b>                                                   
                      </p>
                      
                      <span>
                        <form  method="post" action="#" >
                            <input type="hidden" name="tipo_traslado_rd" value="<?php echo @$_POST["tipo_traslado"]?>"/>                    
                            <input type="hidden" name="fecha_llegada" value="<?php echo @$_POST["from"]?>"/>
                            <input type="hidden" name="fecha_salida" value="<?php echo @$_POST["to"]?>" />
                            <input type="hidden" name="origen" value="<?php echo @$_POST["origen"]?>"/>
                            <input type="hidden" name="id_destino" value="<?php echo @$_POST["destino"]?>" />
                            <input type="hidden" name="pax" value="<?php echo @$_POST["pax"]?>" />
                            <input type="hidden" name="id_categoria_traslado" value="<?php echo @$_POST["id_categoria_traslado"]?>" />
                            <input type="hidden" name="id_zona" value="<?php echo @$_POST["zona"]?>" />
                            <input type="hidden" name="total" value="<?php echo $r['precio_total']?>"/>
                            <input type="hidden" name="id_rangos_pax" value="<?php echo $r['id_rangos_pax']?>"/>
                            <input type="hidden" name="token" value="<?php $key = bin2hex($this->encryption->create_key(16));  echo $key; ?>"/>
                            <input type="hidden" name="status" value="1"/>
                         <b>Total<br>
                          <?=$r['precio_total']?> MXN
                          </b>
                          <a class="confirmaReserva" href="<?php echo base_url()?>confirmareserva">reservar</a>
                          </form>                        
                        </span>
                  <div class="clearfix"></div>                              
                  </div>
                  <?php endforeach?>
                  <?php endif?>
                </div>                               
            </div>
        </div>
        

