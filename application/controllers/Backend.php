<?php //phpinfo();exit;

defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('email');
        //$this->load->library('my_phpmailer');
        
        $this->load->helper('url_helper');
        $this->load->library('encryption');

    }

  


	public function login()
	{	

        $data=array();
        $msg = 'My secret message';

$encrypted_string = $this->encrypt->encode($msg);

echo(
 $encrypted_string);
        //$this->load->view('backend/login',$data);	
		
	}

}
