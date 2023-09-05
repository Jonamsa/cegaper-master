<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ', 'rb');
define('FOPEN_READ_WRITE', 'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 'ab');
define('FOPEN_READ_WRITE_CREATE', 'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
define('EXIT_SUCCESS', 0); // no errors
define('EXIT_ERROR', 1); // generic error
define('EXIT_CONFIG', 3); // configuration error
define('EXIT_UNKNOWN_FILE', 4); // file not found
define('EXIT_UNKNOWN_CLASS', 5); // unknown class
define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
define('EXIT_USER_INPUT', 7); // invalid user input
define('EXIT_DATABASE', 8); // database error
define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code



$IsProduction = 0;

if($IsProduction == 0){
    //$Webservice     = "http://localhost:8047/server/server.php?wsdl";
    $Webservice         = "http://localhost:93/server/server.php?wsdl";
    $BaseUrl            = "";
    $BaseUrlBds         = "";
    $route_project      = "C:/AppServ/www/Cegaper_Web/";
    $Website            = "http://localhost:8888";
    //$Backend        = "http://localhost:8012";
    $Backend            = "http://backend.bdstravels.com";
    $WebsiteIngles      = "http://mayandestinations.com:82";
    $WebsiteEspanol     = "http://localhost:8888";
}
else {
    $Webservice     = "http://xmlapi.sysadmintravel.com/server/server.php?wsdl";
    $BaseUrl        = "/public";
    $route_project  = "C:/AppServ/www/Cegaper_Web/";
    $Website        = "http://www.mayandestinations.com";
    $Backend        = "http://backend.bdstravels.com";
 $BaseUrlBds         = "";
    $WebsiteIngles  = "";
    $WebsiteEspanol = "";
}

$Phone              = "(998) 882 2060";
$ServerLogError     = $route_project."log/error";
$Email              = "info@cegaper.com";
$User               = "cegaper";
$Pass               = "admin";
$Pax                = 16;


$project			= "C:/AppServ/www/site/app/";

define("SERVER_URL",$project);
$Url = "http://localhost:8888/cegaper.com/public";
define("BASE_URL",$Url);

define('Company','Cegaper');
define('BackendName', 'BDS');
define('EMAIL', $Email);
define('IS_PRODUCTION', $IsProduction);

define('WEBSITE_SERVER', $WebsiteIngles);
define('WEBSITE_SERVER_ES', $WebsiteEspanol);

define('BACKEND', $Backend);
define('WEBSERVICE_URL',$Webservice);
define('BASE_URL_REPOSITORY', $BaseUrlBds);
define('SERVER_LOG_ERROR', $ServerLogError);
define('WEBSITE', $Website);
define('PHONE', $Phone);
define('USER', $User);
define('PASS', $Pass);
define('PAX',$Pax);
define('URL_PAYPAL',"http://localhost:92/RedirectPaypal");

/*variables paypal */

define('ProPayPal', 0);
if(ProPayPal){
    define("PayPalClientId", "AZcIEGlB2jncs3r_Y5Qqrnn2_sf6liWputAZcjPUL4_A_itfn0l_YJFyNj93DMGx_eD8Ay0LWyzWIvA_");
    define("PayPalSecret", "EECQJpZEbbT1okaBz3LsvhlUmAcRGYepxl2PauTgWPBcEdIIAOlp3C_M6f-6QAWiUs9LzyYuQMXt3xlz");
    define("PayPalBaseUrl", "https://api.paypal.com/v1/");
    define("PayPalENV", "production");
} else {
    define("PayPalClientId", "AdSKf6SuMEujOHd4EcELGTQZ_uVVuegecXxnmAuK1g25NzqaifvPe4SRXYMfXFVBpbbR45cYWdPjcXhc");
    define("PayPalSecret", "ED8Rp16KZYf29ey3Ufc6jlxcogDgNpxTYqo47QKHMGDUPPN0gbcbX-QpbfoByhCL4GTNUXeuSy4KcD92");
    define("PayPalBaseUrl", "https://api.sandbox.paypal.com/v1/");
    define("PayPalENV", "sandbox");
}
