<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error{

    function __construct()
    {

    }


    function errorHandler($Code,$Description){
        throw new Exception($Description,$Code);

    }

    function LogError($Error){

        $directorio = date('Y-m-d');
        $MyFile = $this->GenerateFile();

        $ruta = SERVER_LOG_ERROR.'/'.$directorio;
        if(!file_exists($ruta)){
            $carpeta = SERVER_LOG_ERROR.'/'.$directorio;
            mkdir($carpeta, 0700);
            error_log(print_r($Error,true), 3, SERVER_LOG_ERROR.'/'.$directorio.'/'.$MyFile.'.txt');
        }
        else{
            error_log(print_r($Error,true), 3, SERVER_LOG_ERROR.'/'.$directorio.'/'.$MyFile.'.txt');
        }
        //Save the error un file
        //$mail = new Email('yo','123','Ocurrio un probema');
        //exit;
    }


    function GenerateFile(){
        $Rand	 	    = rand(111111,999999);
        $date           = date("H-i-s");
        $mircotime      = microtime();
        //$resultado = str_replace(":", "-", $date);


        $file = "{$date}_{$mircotime}_{$Rand}";
        return $file;
    }
}