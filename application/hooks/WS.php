<?php
	Class WS



		{	
			public $client;

			function WS()
			{
				$this->client = new SoapClient ('http://webservice-local.site.com:8080/public/server/server.php?wsdl', array("trace"=>true));
				return $this->client;
			}
		}

?>