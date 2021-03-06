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
$route['manual'] = 'welcome/manual';
$route['ayuda'] = 'welcome/ayuda';
$route['terminos'] = 'welcome/terminos';
$route['manual_post'] = 'welcome/manual_post';
$route['paso2'] = 'welcome/paso2';
$route['paso2_registro'] = 'welcome/paso2_registro';
$route['usuario_login'] = 'welcome/usuario_login';
$route['usuario_registro'] = 'welcome/usuario_registro';
$route['compartir'] = 'welcome/compartir';
$route["compartir/(:any)"] = 'welcome/compartir/$1';
$route['login'] = "acl/acl_login/index";
$route['logout'] = "acl/acl_login/logout";
$route['acl/permisos'] = "acl/acl_permisos";
$route['acl/permisos/(:any)'] = "acl/acl_permisos/$1";
$route['acl/usuarios'] = "acl/acl_usuarios";
$route['acl/usuarios/(:any)'] = "acl/acl_usuarios/$1";


$route["pasos/(:any)"] = 'pasos/$1';
$route["acl/(:any)"] = 'acl/$1';
$route["usuarios/(:any)"] = 'usuarios/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
