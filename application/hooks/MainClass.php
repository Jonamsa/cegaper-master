<?php

<?php

class Tlogin{
    function Tlogin($a,$b)
    {
        $this->User     = $a;
        $this->Password = $b;
    }
    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
}

class TAvailabilityTransferRq{
    function TAvailabilityTransferRq($a,$b){
        $this->SessionId            = $a;
        $this->AvaiTransferRqList  = $b;
    }
    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
}

class TAvaiTransferRq{
    function TAvaiTransferRq($a,$b,$c,$d,$e,$f,$g){
        $this->Id               = $a;
        $this->DepartureType    = $b;
        $this->DepartureCode    = $c;
        $this->DestinationType  = $d;
        $this->DestinationCode  = $e;
        $this->ServiceCode      = $f;
        $this->NumberPax        = $g;
    }
    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
}
class TBookRq{
    function TBookRq($a,$b,$c){
        $this->SessionId            = $a;
        $this->BookId               = $b;
        $this->BookServiceRqList   = $c;
    }
    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
}
class TBookServiceRq{
    function TBookServiceRq($a,$b,$c){
        $this->Id           = $a;
        $this->ArrivalInfo  = $b;
        $this->ReturnInfo   = $c;
    }
    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
}
class TBookInfoRq{
    function TBookInfoRq($a,$b,$c,$d,$e){
        $this->ServicelDate     = $a;
        $this->ServicelTime     = $b;
        $this->Airline          = $c;
        $this->FlightNumber     = $d;
        $this->ChildSeat        = $e;
    }
    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
}


class TConfirmBookingInfo
{
    function TConfirmBookingInfo($a,$b,$c,$d,$e,$f,$g,$h)
    {
        $this->Name         = $a;
        $this->LastName     = $b;
        $this->Phone        = $c;
        $this->Mobile       = $d;
        $this->EMail        = $e;
        $this->HowFindUS    = $f;
        $this->Country      = $g;
        $this->Comments     = $h;
    }
    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
}
class  TConfirmBookingRq
{
    function TConfirmBookingRq($a,$b)
    {
        $this->SessionId            = $a;
        $this->ConfirmBookingInfo   = $b;
    }
    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
}

class THotelListRq 
{
	function THotelListRq($a)
	{
		$this->SessionId 		= $a;
	}
	function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
	
}




?>
?>