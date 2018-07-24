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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'homeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
    
$route['eventos']='eventos_controller';
//$route['planeacion']='planeacion.php';

$route['ver/evento/(:num)']='eventos_controller/showEvento/$1';
$route['pagina/(:num)'] = 'eventos_controller/paginaEvento/$1';
  
$route['noticias'] = 'noticias_controller';
$route['ver/noticia/(:num)/(:num)'] = 'noticias_controller/showNotice/$1/$2';
$route['pagina/(:num)'] = 'noticias_controller/paginaNoticia/$1';

$route['login']='homeController/entrar';
$route['logout']='homeController/salir';

//Rutas administrador
$route['administrador']='admin';

$route['administrador/ver/noticia/(:num)']='admin/noticia/$1';
$route['administrador/ver/evento/(:num)']='admin/evento/$1';
$route['administrador/ver/trabajo/(:num)']='admin/trabajo/$1';

$route['administrador/agregar/noticia']='admin/addNoticia';
$route['administrador/agregar/evento']='admin/addEvento';
$route['administrador/agregar/trabajo']='admin/addTrabajo';

$route['administrador/editar/noticia/(:num)']='admin/editNoticia/$1';
$route['administrador/editar/evento/(:num)']='admin/editEvento/$1';
$route['administrador/editar/trabajo/(:num)']='admin/editTrabajo/$1';

$route['becas'] = 'becasController';
$route['nosotros'] = 'nosotrosController';
$route['pagos'] = 'pagosController';

$route['administrador/eliminar/noticia/(:num)']='admin/eliminarNoticia/$1';

$route['reinscripcion'] = 'reinscripcionController';
$route['transparencia'] = 'transparenciaController';
$route['serviciosAsistencia'] = 'serviciosAController';


