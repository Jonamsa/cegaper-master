<?php
/**
 * Created by PhpStorm.
 * User: Angel Morales
 * Date: 14/12/2016
 * Time: 12:11 AM
 */

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

}
function GenerateFile(){
    $Rand	 	    = rand(111111,999999);
    $date           = date("H-i-s");
    $mircotime      = microtime();
    //$resultado = str_replace(":", "-", $date);

    $file = "{$date}_{$mircotime}_{$Rand}";
    return $file;
}