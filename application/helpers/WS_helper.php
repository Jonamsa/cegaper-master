<?php
	Class WS


		{	
			public $client;

			function WS()
			{
				
				$url = "http://ws.site.com/server.php?wsdl";
				$this->CheckWSDL($url);
				$this->client = new nusoap_client($url,'wsdl');
				return $this->client;
			}


			function CheckWSDL($url){
				$xml = file_get_contents($url);
				if (trim($xml) == '') {
    				redirect('contact');
				}

			}

		}

?>
