<?php
/**
 * Created by PhpStorm.
 * User: Angel Morales
 * Date: 20/11/2017
 * Time: 11:37 PM
 */


class Tlogin{
    function Tlogin($a,$b,$c,$d,$e)
    {
        $this->User     = $a;
        $this->Password = $b;
        $this->Sitio    = $c;
        $this->Currency = $d;
        $this->Language = $e;
    }
    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
}


class TAvaiTransferRq{
    function TAvaiTransferRq($a,$b,$c,$d,$e,$f,$g,$h){
        $this->Id               = $a;
        $this->Type             = $b;
        $this->Arrival          = $c;
        $this->Return           = $d;
        $this->ServiceType      = $e;
        $this->PaxNumber        = $f;
        $this->ReturnPaxNumber  = $g;
        $this->ServiceCode      = $h;

    }
    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
}
class TBookServiceRq{
    function TBookServiceRq($a,$b,$c){
        $this->Id           = $a;
        $this->BookInfo     = $b;
        $this->PromoCode    = $c;
    }
    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
}
class TBookServiceInfoRq{
    function TBookServiceInfoRq($a,$b){
        $this->ArrivalInfo  = $a;
        $this->ReturnInfo   = $b;
    }
    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
}
class TBookInfoRq{
    function TBookInfoRq($a,$b,$c,$d,$e,$f,$g,$h,$i,$j){
        $this->ServicelDate     = $a;
        $this->ServicelTime     = $b;
        $this->Airline          = $c;
        $this->FlightNumber     = $d;
        $this->ChildSeat        = $e;
        $this->PickupLocation   = $f;
        $this->DeliveryMethod   = $g;
        $this->FlightCity       = $h;
        $this->FlightTime       = '';
        $this->FlightDate       = '';
        $this->PickupLocationName = $i;
        $this->DeliveryMethodName = $j;
        // $this->PromoCode        = $k;
    }
    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
}


class TConfirmBookingInfo
{
    function TConfirmBookingInfo($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k)
    {
        $this->Name         = $a;
        $this->LastName     = $b;
        $this->Phone        = $c;
        $this->Mobile       = $d;
        $this->EMail        = $e;
        $this->HowFindUS    = $f;
        $this->Country      = $g;
        $this->City         = $h;
        $this->Comments     = $i;
        $this->RedirectUrl  = $j;
        $this->Payment      = $k;
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
class TTourListRq{

    public function TTourListRq($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k){
        $this->TourId               = $a;
        $this->TourName             = $b;
        $this->TourLocationId       = $c;
        $this->TourLocationName     = $d;
        $this->TransferLocationId   = $e;
        $this->TransferLocationName = $f;
        $this->ClassificationId     = $g;
        $this->ClassificationName   = $h;
        $this->TourPrivate          = $i;
        $this->CategoryId           = $j;
        $this->TourSearchTerm       = $k;

    }
    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
}

class TTourTariffRq{

    public function TTourTariffRq($a,$b,$c,$d,$e,$f){
        $this->TourDate         = $a;
        $this->Adult            = $b;
        $this->Children         = $c;
        $this->Infant           = $d;
        $this->TourOptionId     = $e;
        $this->TourScheduleId   = $f;
    }
    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
}

class TAvaiTourRq{

    function TAvaiTourRq($a,$b,$c,$d,$e,$f){
        $this->Id               = $a;
        $this->Type             = $b;
        $this->TourDate         = $c;
        $this->TourId           = $d;
        $this->TourScheduleId   = $e;
        $this->TourOptionList   = $f;
    }

    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
}

class TAvaiTourOptionRq{
    function TAvaiTourOptionRq($a,$b,$c,$d,$e){
        $this->TourOptionId         = $a;
        $this->Adult                = $b;
        $this->Children             = $c;
        $this->Infant               = $d;
        $this->ScheduleId              = $e;
    }
    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }

}


class TAvaiProductRq{

    function TAvaiProductRq($a,$b,$c,$d){
        $this->Id               = $a;
        $this->Type             = $b;
        $this->ProductId        = $c;
        $this->Quantity         = $d;
    }

    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
}
class TBookRemoveRq{
    function TBookRemoveRq($a,$b){

        $this->SessionId       = $a;
        $this->BookId          = $b;
    }
    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }

}

class TAvaiAddOnRq{

    function TAvaiAddOnRq($a,$b,$c,$d,$e,$f,$g){
        $this->Id               = $a;
        $this->Type             = $b;
        $this->BookId           = $c;
        $this->ServiceId        = $d;
        $this->Quantity         = $e;
        $this->Adult            = $f;
        $this->Child            = $g;

    }

    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
}

class TPayment_PayPal{

    function TPayment_PayPal($a,$b,$c){
        $this->Status           = $a;
        $this->PaymentId        = $b;
        $this->PayerId          = $c;
    }

    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }


}
class TAvaiTransferServiceRq{

    function TAvaiTransferServiceRq($a,$b){
        $this->Departure           = $a;
        $this->Destination         = $b;
    }
    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }

}

class TAvaiTransferDetailRq{

    function TAvaiTransferDetailRq($a,$b,$c,$d){
        $this->Type         = $a;
        $this->Code         = $b;
        $this->Name         = $c;
        $this->AltHotelName = $d;

    }
    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }

}

class TRegisterAffidRq{
    function TRegisterAffidRq($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n){

        $this->FirstName = $a;
        $this->LastName = $b;
        $this->Company = $c;
        $this->Address = $d;
        $this->RFC = $e;
        $this->WebSite = $f;
        $this->Country = $g;
        $this->State = $h;
        $this->City = $i;
        $this->Zip = $j;
        $this->Phone = $k;
        $this->Email = $l;
        $this->Password = $m;
        $this->PaypalEmailId = $n;

    }

    function AsWSDLType()
    {
        return  new SoapVar($this, SOAP_ENC_OBJECT, get_Class($this));
    }
}



?>