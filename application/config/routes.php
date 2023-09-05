<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = 'welcome';
$route['cancun'] = 'welcome/cancun';
$route['cuernavaca'] = 'welcome/cuernavaca';
$route['home'] = 'welcome';

/*=====================rutas para contacto=============================*/
$route['contact'] = 'home/contact';
/*========================rutas cancun info=============================*/
$route['cancun/nosotros']                       = 'welcome/nosotros';
$route['cancun/servicios']                      = 'welcome/servicios';
$route['cancun/contacto']                       = 'welcome/contacto';
$route['cuernavaca/nosotros']                   = 'welcome/nosotros_cuernavaca';
$route['cuernavaca/servicios']                  = 'welcome/servicios_cuernavaca';
$route['cuernavaca/contacto']                   = 'welcome/contacto_cuernavaca';
$route['book_add']                              = 'welcome/BookAdd';
/*======================ruta de carrito de compras=================*/
$route['politicas']                             = 'welcome/politicas';
/*========================ajax=====================================*/
$route['aviso_privacidad']                         = 'welcome/aviso';
$route['suscribete/newsletter']                 = "welcome/form_suscribe";
$route['contacto_email']                        = "welcome/form_contacto";
$route['buscardisponibilidad']                        = "welcome/buscar_disponibilidad";
$route['confirmareserva/(:any)']                        = "welcome/confirma_reserva/$1";

$route['reservaFinalizada']                        = "welcome/detailsPaypal";

$route['plantilla']                        = "welcome/plantilla";

$route['gracias']                        = "welcome/gracias";
/*Funcion temporal*/

/*========================Backend=====================================*/
$route['admin/login']                        = "backend/login";


$route['translate_uri_dashes'] = FALSE;
