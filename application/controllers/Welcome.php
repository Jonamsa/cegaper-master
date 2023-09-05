<?php //phpinfo();exit;
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require '../../PHPMailer/src/Exception.php';
// require '../../PHPMailer/src/PHPMailer.php';
// require '../../PHPMailer/src/SMTP.php';

require '/home/cegaper/public_html/application/libraries/PHPMailer/src/Exception.php';
require '/home/cegaper/public_html/application/libraries/PHPMailer/src/PHPMailer.php';
require '/home/cegaper/public_html/application/libraries/PHPMailer/src/SMTP.php';


class Welcome extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('email');
        $this->load->model('frontend');
        $this->load->helper('url_helper');
        $this->load->library('encryption');
    }


    public function hola()
    {
        echo "inf";
    }


    public function index()
    {
        $data=array();
        $this->load->view('layout/header');
        $this->load->view('home');  
    }


	public function cancun()
	{	

        $data=array();
        
            $data['destinosAH'] = $this->frontend->get_destinos_traslados();
            $data['destinosE'] = $this->frontend->get_destinos_excursion();
			$this->load->view('layout/header',$data);
			$this->load->view('layout/menu',$data);
            $this->load->view('caja_cancun',$data);
            $this->load->view('cancun',$data);
			$this->load->view('layout/footer',$data);		
		
	}
	/*end cancun*/

	public function cuernavaca()
	{	
		    $data= array();
			$this->load->view('layout/header',$data);
			$this->load->view('layout/menu-cuernavaca',$data);
			$this->load->view('cuernavaca',$data);
			$this->load->view('layout/footer-cuernavaca',$data);
			
	}

        

  

	public function politicas(){

		$data= array();
		$data['active'] = 1;
		$this->load->view('layout/header',$data);
        $this->load->view('layout/menu',$data);
		$this->load->view('politicas',$data);
		$this->load->view('layout/footer',$data);
		
	}

	public function nosotros(){

		$data= array();
		$data['active'] = 2;
		$this->load->view('layout/header',$data);
        $this->load->view('layout/menu',$data);
		$this->load->view('cancun/nosotros',$data);
		$this->load->view('layout/footer',$data);
		
	}


	public function nosotros_cuernavaca(){

		$data= array();
		$data['active'] = 2;
		$this->load->view('layout/header',$data);
        $this->load->view('layout/menu-cuernavaca',$data);
		$this->load->view('cuernavaca/nosotros',$data);
		$this->load->view('layout/footer-cuernavaca',$data);
		
	}


	public function servicios(){

		$data= array();
		$data['active'] = 3;
		$this->load->view('layout/header',$data);
        $this->load->view('layout/menu',$data);
		$this->load->view('cancun/servicios',$data);
		$this->load->view('layout/footer',$data);
		
    }
    
 
    
 

	public function servicios_cuernavaca(){

		$data= array();
		$data['active'] = 3;
		$this->load->view('layout/header',$data);
        $this->load->view('layout/menu-cuernavaca',$data);
		$this->load->view('cuernavaca/servicios',$data);
		$this->load->view('layout/footer-cuernavaca',$data);
		
	}

	public function contacto(){

		$data= array();
		$data['active'] = 4;
		$this->load->view('layout/header',$data);
        $this->load->view('layout/menu',$data);
		$this->load->view('cancun/contacto',$data);
		$this->load->view('layout/footer',$data);
		
	}
	public function contacto_cuernavaca(){

		$data= array();
		$data['active'] = 4;
		$this->load->view('layout/header',$data);
        $this->load->view('layout/menu-cuernavaca',$data);
		$this->load->view('cuernavaca/contacto',$data);
		$this->load->view('layout/footer-cuernavaca',$data);
		
	}


	public function form_contacto()
    {
        
        

        $email=$_POST['email'];
        $nombre=$_POST['nombre'];
        $tel=$_POST['tel'];
        $ciudad=$_POST['ciudad'];
        $estado=$_POST['estado'];
        $direccion=$_POST['direccion'];
        $codigo_postal=$_POST['codigo_postal'];
        $comentario = $_POST['comentario'];
        $destino = $_POST['destino'];
        $pasajeros = $_POST['num_pax'];
        $sitio = $_POST['sitio'];
        $cade=" ";
         
        $cade.='Nombre'.': '.$nombre.'<br>';
        $cade.='Email'.': '.$email.'<br>';
        $cade.='Tel'.': '.$tel.'<br>';
        $cade.='Ciudad'.': '.$ciudad.'<br>';
        $cade.='Estado'.': '.$estado.'<br>';
        $cade.='Direccción'.': '.$direccion.'<br>';
        $cade.='CP'.': '.$codigo_postal.'<br>';
        $cade.='Comentario'.': '.$comentario.'<br>';
        $cade.='Destino'.': '.$destino.'<br>';
        $cade.='Numero de pasajeros'.': '.$pasajeros.'<br>';


        
            
           
            if(!empty($_POST))
             {           
                 
                //Create a new PHPMailer instance
                $mail = new PHPMailer;
                //Tell PHPMailer to use SMTP
                $mail->isSMTP();
                //Enable SMTP debugging
                // 0 = off (for production use)
                // 1 = client messages
                // 2 = client and server messages
                $mail->SMTPDebug = 0;
                //Ask for HTML-friendly debug output
                $mail->Debugoutput = 'html';
                //Set the hostname of the mail server
                $mail->Host = "mail.elitekode.com";
                //Set the SMTP port number - likely to be 25, 465 or 587
                $mail->Port = 587;
                //Whether to use SMTP authentication
                $mail->SMTPAuth = true;
                //Username to use for SMTP authentication
                $mail->Username = "cegaper@elitekode.com";
                //Password to use for SMTP authentication
                $mail->Password = "Cegaper325%";
                //Set who the message is to be sent from
                $mail->setFrom('reservaweb@cegaper.com', 'Contact');
                

                if($sitio ==1){                
                //Set who the message is to be sent to

                    $mail->addAddress('info@cegaper.com','Contact');
                    
                   
                }
                else{
                    $mail->addAddress('info@cegaper.com','Contact');
               
                }
                /*
                $mail->addAddress('ellen@example.com');               // Name is optional
                $mail->addReplyTo('info@example.com', 'Information');
                $mail->addCC('cc@example.com');
                $mail->addBCC('bcc@example.com');
                */

                ///AAmJM8LTBTZ
                //Set the subject line
                $mail->Subject = 'Contacto Cancun';
                
                //Read an HTML message body from an external file, convert referenced images to embedded,
                //convert HTML into a basic plain-text alternative body
                $mail->msgHTML($cade);
            
            
                //send the message, check for errors
                if (!$mail->send()) 
                    {
                      echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;

                    } 
                    else { 
                        echo 1;
                    } 

                //$data['exito_contacto']='1';
            
            }

            else{
                echo 2;
            }
  
    }


    public function aviso(){

		$data= array();
		$data['active'] = 1;
		$this->load->view('layout/header',$data);
        $this->load->view('layout/menu',$data);
		$this->load->view('aviso',$data);
		$this->load->view('layout/footer',$data);
		
	}

    public function form_suscribe()
    {

   

        $email=$_POST['email'];
        $cade=" ";
         
        $cade.='Nuevo suscriptor'.': '.$email.'<br>';     
         
        $datos= array(
         	'email' => $email
        );
        //$data['campo'] = $this->admin_model->verifica_email($email);
        //$respuesta = $data['campo'];

        //if($respuesta != $email) {
        	
         	//$data['agregar']=$this->admin_model->add_contacto($email);
            
           
            if(!empty($_POST))
             {           
                 
                //Create a new PHPMailer instance
                $mail = new PHPMailer;
                //Tell PHPMailer to use SMTP
                $mail->isSMTP();
                //Enable SMTP debugging
                // 0 = off (for production use)
                // 1 = client messages
                // 2 = client and server messages
                $mail->SMTPDebug = 0;
                //Ask for HTML-friendly debug output
                $mail->Debugoutput = 'html';
                //Set the hostname of the mail server
                $mail->Host = "host.hddcms.com";
                //Set the SMTP port number - likely to be 25, 465 or 587
                $mail->Port = 26;
                //Whether to use SMTP authentication
                $mail->SMTPAuth = true;
                //Username to use for SMTP authentication
                $mail->Username = "info@cegaper.com";
                //Password to use for SMTP authentication
                $mail->Password = "@cegaper2015";
                //Set who the message is to be sent from
                $mail->setFrom('info@cegaper.com', 'Contact');
                
                //$mail->AddCC("jcsalgado@oasishoteles.com","Contact");
                
                //Set who the message is to be sent to
                $mail->addAddress('amms91@gmail.com', 'Contact');
                //$mail->addAddress('manuel@reaxion.com.mx');
                $mail->addAddress('pattytoscano@cegaper.com');
                ///AAmJM8LTBTZ
                //Set the subject line
                $mail->Subject = 'Newsletter';
                
                //Read an HTML message body from an external file, convert referenced images to embedded,
                //convert HTML into a basic plain-text alternative body
                $mail->msgHTML($cade);
            
            
                //send the message, check for errors
                if (!$mail->send()) 
                    {
                        echo 2;

                    } 
                    else { 
                        echo 1;
                    } 

                
            }

     
  
    }


    public function buscar_disponibilidad()
    {

        //Array ( [servicio] => 1 [origen] => n [excursion] => 9 [from] => 04/18/2019 [pax] => 46 [id_categoria_traslado] => 2 [zona] => 1 )

        $data=array();
        $data['destinosAH'] = $this->frontend->get_destinos_traslados();
        $data['destinosE'] = $this->frontend->get_destinos_excursion();
        $data['R'] = $this->frontend->get_resultados_traslados();
        $this->load->view('layout/header',$data);
		$this->load->view('layout/menu',$data);
		$this->load->view('caja_cancun',$data);
		$this->load->view('layout/footer',$data);
    }  


    public function confirma_reserva()
    {
        $data=array();
        $data['info']=$this->frontend->getInfo();
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu',$data);
        $this->load->view('layout/reservaconfirmar',$data);
        $this->load->view('layout/footer',$data);
    }

    public function clientesForm(){
    
        $this->frontend->setClientes();

    }

    public function guardaReserva(){

        $this->frontend->setReserva();
   
    }

    public function detailsPaypal(){
        $data= array();
        $this->frontend->confirmacionPago();
        $correo=$this->input->get('correo');
        $token=$this->input->get('pid');
        $this->envioinformacion($token,$correo);
        
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu',$data);
        $this->load->view('detailspaypal');
        $this->load->view('layout/footer',$data);
        // $data['info']=$this->frontend->getReservaPagada($this->input->get('pid'));
        // $this->load->view('mailConfirmacion', $data);
    }




    public function envioinformacion($token, $correo)
    {
        $data=array();
        $data['info']=$this->frontend->getReservaPagada($token);

        $cade = $this->load->view('mailConfirmacion',$data,TRUE);
         //Create a new PHPMailer instance
         $mail = new PHPMailer;
         //Tell PHPMailer to use SMTP
         $mail->isSMTP();
         //Enable SMTP debugging
         // 0 = off (for production use)
         // 1 = client messages
         // 2 = client and server messages
         $mail->SMTPDebug = 0;
         //Ask for HTML-friendly debug output
         $mail->Debugoutput = 'html';
         //Set the hostname of the mail server
         $mail->Host = "mail.elitekode.com";
         //Set the SMTP port number - likely to be 25, 465 or 587
         $mail->Port = 587;
         //Whether to use SMTP authentication
         $mail->SMTPAuth = true;
         //Username to use for SMTP authentication
         $mail->Username = "cegaper@elitekode.com";
         //Password to use for SMTP authentication
         $mail->Password = "Cegaper325%";
         //Set who the message is to be sent from
         $mail->setFrom('info@cegaper.com', 'Thank You for your purchase!');
         $mail->addAddress('reservaweb@cegaper.com','Contact');
         $mail->addBCC('juancarlos@elitekode.com');
         $mail->addBCC('manuel@reaxion.com.mx');
         $mail->addBCC('info@cegaper.com');
         $mail->addBCC($correo);
         /*
         $mail->addAddress('ellen@example.com');               // Name is optional
         $mail->addReplyTo('info@example.com', 'Information');
         $mail->addCC('cc@example.com');
         $mail->addBCC('bcc@example.com');
         */

         ///AAmJM8LTBTZ
         //Set the subject line
         $mail->Subject = 'Contacto Cancun';
         
         //Read an HTML message body from an external file, convert referenced images to embedded,
         //convert HTML into a basic plain-text alternative body
         $mail->msgHTML($cade);

        $mail->CharSet = 'UTF-8';
     
         $mail->send();
    
  
    }



    public function plantilla()
    {
        $this->load->view('mailConfirmacion');
    }
    



}
