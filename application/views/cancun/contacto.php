<div class="full-slider-interna">
    <div class="titulo-galeria">
        <h2>Contacto</h2>
    </div>
</div>


        <div id="pleca-blanca2">
            <div class="container container-twelve">
                <div class="eight columns offset-by-two" id="content">
                    <div class="texto-interna">
                        <h2>CEGAPER Cancún</h2>
                        <h3>Contacto</h3>
                    </div>
                </div>
                <div class="eight columns offset-by-two">
                    <h3>Contactenos si requiere alguna información de nuestros servicios y/o tiene alguna duda</h3>
                    <form id="form-contacto" method="post" action="<?php echo base_url()?>contacto_email">
                        <input type="hidden" name="sitio" value="1">
                        <div class="formleft">
                            <label>Nombre</label>
                            <input type="text" name="nombre" id="nombre" required>
                            <label>Telefono</label>
                            <input type="text" name="tel" id="tel" required>
                            <label>Email</label>
                            <input type="text" name="email" id="email" required>
                            <label>Ciudad</label>
                            <input type="text" name="ciudad" id="ciudad" required>
                            
                            <label>Destino</label>
                            <input type="text" name="destino">
                            <label>Numero de pasajeros</label>
                            <input type="text" name="num_pax">                             
                            
                        </div>
                        <div class="formright">
                            <label>Estado</label>
                            <input type="text" name="estado" required>
                            <label>Dirección</label>
                            <input type="text" name="direccion" required>
                            <label>Código postal</label>
                            <input type="text" name="codigo_postal" required>
                            <label>Comentarios</label>
                            <textarea name="comentario" required></textarea>
                            <input type="submit" value="ENVIAR" class="envia-contacto">
                        </div>
                        <div class="clearfix"></div>
                    </form>
                    
                </div>
                <div class="clearfix"></div>
                <div class="eight columns offset-by-two">
                    <h4>Cancún Quintana Roo Mexico.</h4>
                    <h4> <span>Benito Juárez<br>Código Postal: 77500 - Cancún, Quintanta Roo.</span></h4>
                </div>
            </div>
        </div>
        <div id="map"></div>

 