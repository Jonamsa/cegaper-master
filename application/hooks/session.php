<?php

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
                $result                 = $this->client->getSession($_SESSION["Session"]->SessionId);
                $_SESSION["Session"]    = $result;
            }
            catch(Exception $E){
                $_SESSION["Session"]    = "";
            }
        }  
        else
        {
            $result               = $this->loginWithDefaultValues();
            $_SESSION["Session"]  = $result;
        }

    }

    function getDefaultValues(){
        $this->User         = "e_plus";
        $this->Password     = "e_plus1";
    }
    function getVauluesFromPost($Data){
        $this->User         = $Data["User"];
        $this->Password     = $Data["Password"];
    }
    function checkPhpSession(){
        if (isset($_SESSION["Session"]->SessionId) && $_SESSION["Session"]->SessionId != ""){
            return true;
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

}
?>