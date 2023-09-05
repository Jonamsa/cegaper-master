<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



function GenerateTime2(){
    $html = "";
    $Hour = "AM";



    $html.= "<option value='08'>08 AM</option>";
    $html.= "<option value='09'>09 AM</option>";
    $html.= "<option value='10'>10 AM</option>";
    $html.= "<option value='11'>11 AM</option>";
    $html.= "<option value='12'>12 PM</option>";
    $html.= "<option value='13'>01 PM</option>";
    $html.= "<option value='14'>02 PM</option>";
    $html.= "<option value='15'>03 PM</option>";
    $html.= "<option value='16'>04 PM</option>";
    $html.= "<option value='17'>05 PM</option>";
    $html.= "<option value='18'>06 PM</option>";
    $html.= "<option value='19'>07 PM</option>";
    $html.= "<option value='20'>08 PM</option>";

    /*

    for($i=0; $i<24;$i++){
        if($i>12){
            $Hour = "PM";
        }
        if($i>9){
            if($i == 10){
                $selected = "selected";
            }
            else{
                $selected = "";
            }
            $html.= "<option value='".$i."' ".$selected.">".date("H ",strtotime($i.":00")).$Hour."</option>";
        } else{
            $html.= "<option value='0".$i."'>".date("H ",strtotime($i.":00")).$Hour."</option>";

        }
    }
    */
    return $html;
}
function GenerateTime(){
    $html = "";
	$Hour = "AM";
	
	 
	 $html.= "<option value='01'>01 AM</option>";
	 $html.= "<option value='02'>02 AM</option>";
	 $html.= "<option value='03'>03 AM</option>";
	 $html.= "<option value='04'>04 AM</option>";
	 $html.= "<option value='05'>05 AM</option>";
	 $html.= "<option value='06'>06 AM</option>";
	 $html.= "<option value='07'>07 AM</option>";
	 $html.= "<option value='08'>08 AM</option>";
	 $html.= "<option value='09'>09 AM</option>";
	 $html.= "<option value='10'>10 AM</option>";
	 $html.= "<option value='11'>11 AM</option>";
	 $html.= "<option value='12'>12 PM</option>";
	 $html.= "<option value='13'>01 PM</option>";
	 $html.= "<option value='14'>02 PM</option>";
	 $html.= "<option value='15'>03 PM</option>";
	 $html.= "<option value='16'>04 PM</option>";
	 $html.= "<option value='17'>05 PM</option>";
	 $html.= "<option value='18'>06 PM</option>";
	 $html.= "<option value='19'>07 PM</option>";
	 $html.= "<option value='20'>08 PM</option>";
	 $html.= "<option value='21'>09 PM</option>";
	 $html.= "<option value='22'>10 PM</option>";
	 $html.= "<option value='23'>11 PM</option>";
	 $html.= "<option value='00'>12 AM / midnight</option>";
	/*
	
    for($i=0; $i<24;$i++){
		if($i>12){
			$Hour = "PM";
		}
        if($i>9){
            if($i == 10){
                $selected = "selected";
            }
            else{
                $selected = "";
            }
            $html.= "<option value='".$i."' ".$selected.">".date("H ",strtotime($i.":00")).$Hour."</option>";
        } else{
            $html.= "<option value='0".$i."'>".date("H ",strtotime($i.":00")).$Hour."</option>";

        }
    }
	*/
    return $html;
}

function GenerateMin(){
    $html = "";
    $html.= "<option value='00'>00 min</option>";
    $html.= "<option value='15'>15 min</option>";
    $html.= "<option value='30'>30 min</option>";
    $html.= "<option value='45'>45 min</option>";

    return $html;
}

function GetFormatDate($Type,$Value){
    switch ($Type){
        case '1':
            $FormatTime = date("h:i a",strtotime($Value));
            break;
        case '2':
            $FormatTime = date("H:i ",strtotime($Value))."hrs";
    }
    return $FormatTime;
}


function NormalizeText($String){
    $response = ucwords(strtolower($String));
    return $response;
}


function getSubString($string, $length=NULL)
{
    //Si no se especifica la longitud por defecto es 50
    if ($length == NULL)
        $length = 50;
    //Primero eliminamos las etiquetas html y luego cortamos el string
    $stringDisplay = substr(strip_tags($string), 0, $length);
    //Si el texto es mayor que la longitud se agrega puntos suspensivos
    if (strlen(strip_tags($string)) > $length)
        $stringDisplay .= ' ...';
    return $stringDisplay;
}

function numtoletras($xcifra)
{
    $xarray = array(0 => "Cero",
        1 => "UN", "DOS", "TRES", "CUATRO", "CINCO", "SEIS", "SIETE", "OCHO", "NUEVE",
        "DIEZ", "ONCE", "DOCE", "TRECE", "CATORCE", "QUINCE", "DIECISEIS", "DIECISIETE", "DIECIOCHO", "DIECINUEVE",
        "VEINTI", 30 => "TREINTA", 40 => "CUARENTA", 50 => "CINCUENTA", 60 => "SESENTA", 70 => "SETENTA", 80 => "OCHENTA", 90 => "NOVENTA",
        100 => "CIENTO", 200 => "DOSCIENTOS", 300 => "TRESCIENTOS", 400 => "CUATROCIENTOS", 500 => "QUINIENTOS", 600 => "SEISCIENTOS", 700 => "SETECIENTOS", 800 => "OCHOCIENTOS", 900 => "NOVECIENTOS"
    );
//
    $xcifra = trim($xcifra);
    $xlength = strlen($xcifra);
    $xpos_punto = strpos($xcifra, ".");
    $xaux_int = $xcifra;
    $xdecimales = "00";
    if (!($xpos_punto === false)) {
        if ($xpos_punto == 0) {
            $xcifra = "0" . $xcifra;
            $xpos_punto = strpos($xcifra, ".");
        }
        $xaux_int = substr($xcifra, 0, $xpos_punto); // obtengo el entero de la cifra a covertir
        $xdecimales = substr($xcifra . "00", $xpos_punto + 1, 2); // obtengo los valores decimales
    }

    $XAUX = str_pad($xaux_int, 18, " ", STR_PAD_LEFT); // ajusto la longitud de la cifra, para que sea divisible por centenas de miles (grupos de 6)
    $xcadena = "";
    for ($xz = 0; $xz < 3; $xz++) {
        $xaux = substr($XAUX, $xz * 6, 6);
        $xi = 0;
        $xlimite = 6; // inicializo el contador de centenas xi y establezco el límite a 6 dígitos en la parte entera
        $xexit = true; // bandera para controlar el ciclo del While
        while ($xexit) {
            if ($xi == $xlimite) { // si ya llegó al límite máximo de enteros
                break; // termina el ciclo
            }

            $x3digitos = ($xlimite - $xi) * -1; // comienzo con los tres primeros digitos de la cifra, comenzando por la izquierda
            $xaux = substr($xaux, $x3digitos, abs($x3digitos)); // obtengo la centena (los tres dígitos)
            for ($xy = 1; $xy < 4; $xy++) { // ciclo para revisar centenas, decenas y unidades, en ese orden
                switch ($xy) {
                    case 1: // checa las centenas
                        if (substr($xaux, 0, 3) < 100) { // si el grupo de tres dígitos es menor a una centena ( < 99) no hace nada y pasa a revisar las decenas

                        } else {
                            $key = (int) substr($xaux, 0, 3);
                            if (TRUE === array_key_exists($key, $xarray)){  // busco si la centena es número redondo (100, 200, 300, 400, etc..)
                                $xseek = $xarray[$key];
                                $xsub = subfijo($xaux); // devuelve el subfijo correspondiente (Millón, Millones, Mil o nada)
                                if (substr($xaux, 0, 3) == 100)
                                    $xcadena = " " . $xcadena . " CIEN " . $xsub;
                                else
                                    $xcadena = " " . $xcadena . " " . $xseek . " " . $xsub;
                                $xy = 3; // la centena fue redonda, entonces termino el ciclo del for y ya no reviso decenas ni unidades
                            }
                            else { // entra aquí si la centena no fue numero redondo (101, 253, 120, 980, etc.)
                                $key = (int) substr($xaux, 0, 1) * 100;
                                $xseek = $xarray[$key]; // toma el primer caracter de la centena y lo multiplica por cien y lo busca en el arreglo (para que busque 100,200,300, etc)
                                $xcadena = " " . $xcadena . " " . $xseek;
                            } // ENDIF ($xseek)
                        } // ENDIF (substr($xaux, 0, 3) < 100)
                        break;
                    case 2: // checa las decenas (con la misma lógica que las centenas)
                        if (substr($xaux, 1, 2) < 10) {

                        } else {
                            $key = (int) substr($xaux, 1, 2);
                            if (TRUE === array_key_exists($key, $xarray)) {
                                $xseek = $xarray[$key];
                                $xsub = subfijo($xaux);
                                if (substr($xaux, 1, 2) == 20)
                                    $xcadena = " " . $xcadena . " VEINTE " . $xsub;
                                else
                                    $xcadena = " " . $xcadena . " " . $xseek . " " . $xsub;
                                $xy = 3;
                            }
                            else {
                                $key = (int) substr($xaux, 1, 1) * 10;
                                $xseek = $xarray[$key];
                                if (20 == substr($xaux, 1, 1) * 10)
                                    $xcadena = " " . $xcadena . " " . $xseek;
                                else
                                    $xcadena = " " . $xcadena . " " . $xseek . " Y ";
                            } // ENDIF ($xseek)
                        } // ENDIF (substr($xaux, 1, 2) < 10)
                        break;
                    case 3: // checa las unidades
                        if (substr($xaux, 2, 1) < 1) { // si la unidad es cero, ya no hace nada

                        } else {
                            $key = (int) substr($xaux, 2, 1);
                            $xseek = $xarray[$key]; // obtengo directamente el valor de la unidad (del uno al nueve)
                            $xsub = subfijo($xaux);
                            $xcadena = " " . $xcadena . " " . $xseek . " " . $xsub;
                        } // ENDIF (substr($xaux, 2, 1) < 1)
                        break;
                } // END SWITCH
            } // END FOR
            $xi = $xi + 3;
        } // ENDDO

        if (substr(trim($xcadena), -5, 5) == "ILLON") // si la cadena obtenida termina en MILLON o BILLON, entonces le agrega al final la conjuncion DE
            $xcadena.= " DE";

        if (substr(trim($xcadena), -7, 7) == "ILLONES") // si la cadena obtenida en MILLONES o BILLONES, entoncea le agrega al final la conjuncion DE
            $xcadena.= " DE";

        // ----------- esta línea la puedes cambiar de acuerdo a tus necesidades o a tu país -------
        if (trim($xaux) != "") {
            switch ($xz) {
                case 0:
                    if (trim(substr($XAUX, $xz * 6, 6)) == "1")
                        $xcadena.= "UN BILLON ";
                    else
                        $xcadena.= " BILLONES ";
                    break;
                case 1:
                    if (trim(substr($XAUX, $xz * 6, 6)) == "1")
                        $xcadena.= "UN MILLON ";
                    else
                        $xcadena.= " MILLONES ";
                    break;
                case 2:
                    if ($xcifra < 1) {
                        //$xcadena = "CERO PESOS $xdecimales/100 M.N.";
                    }
                    if ($xcifra >= 1 && $xcifra < 2) {
                        //$xcadena = "UN PESO $xdecimales/100 M.N. ";
                    }
                    if ($xcifra >= 2) {
                        //$xcadena.= " PESOS $xdecimales/100 M.N. "; //
                    }
                    break;
            } // endswitch ($xz)
        } // ENDIF (trim($xaux) != "")
        // ------------------      en este caso, para México se usa esta leyenda     ----------------
        $xcadena = str_replace("VEINTI ", "VEINTI", $xcadena); // quito el espacio para el VEINTI, para que quede: VEINTICUATRO, VEINTIUN, VEINTIDOS, etc
        $xcadena = str_replace("  ", " ", $xcadena); // quito espacios dobles
        $xcadena = str_replace("UN UN", "UN", $xcadena); // quito la duplicidad
        $xcadena = str_replace("  ", " ", $xcadena); // quito espacios dobles
        $xcadena = str_replace("BILLON DE MILLONES", "BILLON DE", $xcadena); // corrigo la leyenda
        $xcadena = str_replace("BILLONES DE MILLONES", "BILLONES DE", $xcadena); // corrigo la leyenda
        $xcadena = str_replace("DE UN", "UN", $xcadena); // corrigo la leyenda
        $xcadena = str_replace("DIECISEIS", "DIECISéIS", $xcadena); // corrigo la leyenda
        $xcadena = str_replace("VEINTIUN", "VEINTIúN", $xcadena); // corrigo la leyenda
        $xcadena = str_replace("VEINTISEIS", "VEINTISéIS", $xcadena); // corrigo la leyenda
    } // ENDFOR ($xz)
    return trim($xcadena);
}

// END FUNCTION

function subfijo($xx)
{ // esta función regresa un subfijo para la cifra
    $xx = trim($xx);
    $xstrlen = strlen($xx);
    if ($xstrlen == 1 || $xstrlen == 2 || $xstrlen == 3)
        $xsub = "";
    //
    if ($xstrlen == 4 || $xstrlen == 5 || $xstrlen == 6)
        $xsub = "MIL";
    //
    return $xsub;
}

// END FUNCTION


/*------------------------------------------------------------------
 * hug0
 * Blog Kiuvox
 * funcion para generar la fecha en letras
 * http://blog.kiuvox.com
 * ----------------------------------------------------------------
 */
function fechaATexto($fecha){
    $fecha_separada=explode("-", $fecha);

    $dia= strtolower(numtoletras($fecha_separada[0]));

    switch ($fecha_separada[1]) {

        case "01":
            $mes="Enero";
            break;
        case "02":
            $mes="Febrero";
            break;
        case "03":
            $mes="Marzo";
            break;
        case "04":
            $mes="Abril";
            break;
        case "05":
            $mes="Mayo";
            break;
        case "06":
            $mes="Junio";
            break;
        case "07":
            $mes="Julio";
            break;
        case "08":
            $mes="Agosto";
            break;
        case "09":
            $mes="Septiembre";
            break;
        case "10":
            $mes="Octubre";
            break;
        case "11":
            $mes="Noviembre";
            break;
        case "12":
            $mes="Diciembre";
            break;

        default:
            break;
    }

    $anio= strtolower(numtoletras($fecha_separada[2]));


    return "$dia de $mes de $anio.";
}


function obtenerFechaEnLetra($fecha){

    $dia= conocerDiaSemanaFecha($fecha);

    $num = date("j", strtotime($fecha));

    $anno = date("Y", strtotime($fecha));

    $mes = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

    $mes = $mes[(date('m', strtotime($fecha))*1)-1];

    return $dia.', '.$num.'  '.$mes.'  '.$anno;

}



function conocerDiaSemanaFecha($fecha) {

    $dias = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');

    $dia = $dias[date('w', strtotime($fecha))];

    return $dia;

}



