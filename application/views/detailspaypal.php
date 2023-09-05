<div class="full-slider-interna">
    <div class="titulo-galeria">
        <h2>Gracias por su preferencia</h2>
    </div>
</div>

<div class="container">
    <div class="columns">
        <div class="container-info">
        <?php
if(!empty($_GET['paymentID']) && !empty($_GET['payerID']) && !empty($_GET['token']) && !empty($_GET['pid']) ){
$paymentID = $_GET['paymentID'];
$payerID = $_GET['payerID'];
$token = $_GET['token'];
$pid = $_GET['pid'];   
}
?>      <div class="alert alert-success" style="text-align:center; margin-top:30px;" >
        <strong>Pago completado, por favor revise su correo!</strong> 
        </div>
        </div>
    </div> 
</div>

        
      

 