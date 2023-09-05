<?php
include_once("WS_helper.php");
class Session extends WS{


    function Session(){
        $this->client               = $this->WS();
        session_start();
    }

    function NewSession()
    {
        if ($this->checkPhpSession())
        {
            try{
                $this->SessionData      = $this->client->getSession($_SESSION["Session"]->SessionId);
                $_SESSION["Session"]    = $this->SessionData;
                
            }
            catch(Exception $E){
                $_SESSION["Session"]    = "";
            }
        }  
        else
        {
            $this->SessionData          =  $this->loginWithDefaultValues();
            $_SESSION["Session"]        = $this->SessionData;
        }

    }

    function getDefaultValues(){
        $this->User         = "cegaper";
        $this->Password     = "cegaper";
    }
    function getVauluesFromPost($Data){
        $this->User         = $Data["User"];
        $this->Password     = $Data["Password"];
    }
    function checkPhpSession(){
        if (isset($_SESSION["Session"]->SessionId) && $_SESSION["Session"]->SessionId != ""){
            return true;
        }
        if(!isset($this->SessionData)){
            return false;
        }
    }
    function getSoapLogin(){
        $parameter            = new Tlogin($this->User,$this->Password);
        $client               = $this->WS();
        return $client->Login($parameter->AsWSDLType());
    }
    function checkFrmLogin($Data){
        if(intval($Data["CompanyFlg"],10) == 1){
            $this->getVauluesFromPost($Data);
        }
    }

    function loginWithDefaultValues(){
        $this->getDefaultValues();
        return $this->getSoapLogin();
    }
    function getSoapClient(){
        return $this->client;
    }




}



?>