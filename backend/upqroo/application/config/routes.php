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
$route['home']='HomeController';
$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Para cuando fucione la vista general de todos los trabajos
$route['ver/trabajos']= 'trabajos_controller';

//Rutas de carreras
$route['carreras/biotecnologia']='MicrositiosController/index/1';
$route['biotecnologia']='MicrositiosController/index/1';
$route['carreras/software']='MicrositiosController/index/2';
$route['software']='MicrositiosController/index/2';
$route['carreras/biomedica']='MicrositiosController/index/3';
$route['biomedica']='MicrositiosController/index/3';
$route['carreras/pymes']='MicrositiosController/index/4';
$route['pymes']='MicrositiosController/index/4';
$route['carreras/financiera']='MicrositiosController/index/5';
$route['financiera']='MicrositiosController/index/5';
$route['carreras/terapia']='MicrositiosController/index/6';
$route['tearapia']='MicrositiosController/index/6';

//Rutas informativas
$route['becas'] = 'BecasController';
$route['nosotros'] = 'NosotrosController';
$route['pagos'] = 'PagosController';
$route['reinscripcion'] = 'ReinscripcionController';
$route['transparencia'] = 'TransparenciaController';
$route['servicios-asistencia'] = 'ServiciosAController';
$route['planeacion'] = 'PlaneacionController';
$route['directorio'] = 'DirectorioController';
$route['admision'] = 'AdmisionController';
$route['visitas'] = 'VisitasController';

//Rutas funcinalidades
    //Eventos
$route['eventos']='EventosController';
$route['ver/evento/(:num)']='EventosController/showEvento/$1';
$route['pagina/(:num)'] = 'EventosController/paginaEvento/$1';

    //Noticias
$route['noticias'] = 'NoticiasController';
$route['ver/noticia/(:num)/(:num)'] = 'NoticiasController/showNotice/$1/$2';
$route['ver/noticias/(:num)'] = 'NoticiasController';
$route['pagina/(:num)'] = 'NoticiasController/paginaNoticia/$1';

    //Trabajos
//Pendientes

    //Tv
$route['tv'] = 'TvController';

//Rutas de acceso
$route['login']='HomeController/entrar';
$route['logout']='HomeController/salir';

//Rutas administrador
$route['administrador']='Admin';

    //Create
$route['administrador/agregar/noticia']='Admin/addNoticia';
$route['administrador/agregar/evento']='Admin/addEvento';
$route['administrador/agregar/trabajo']='Admin/addTrabajo';

    //Read
$route['administrador/ver/noticia/(:num)']='Admin/noticia/$1';
$route['administrador/ver/evento/(:num)']='Admin/evento/$1';
$route['administrador/ver/trabajo/(:num)']='Admin/trabajo/$1';

    //Update
$route['administrador/editar/noticia/(:num)']='Admin/editNoticia/$1';
$route['administrador/editar/evento/(:num)']='Admin/editEvento/$1';
$route['administrador/editar/trabajo/(:num)']='Admin/editTrabajo/$1';

    //Delete
$route['administrador/eliminar/noticia/(:num)']='Admin/eliminarNoticia/$1';
$route['administrador/eliminar/evento/(:num)']='Admin/eliminarEvento/$1';
$route['administrador/eliminar/trabajo/(:num)']='Admin/eliminarTrabajo/$1';

    //Micrositios
$route['administrador/biotecnologia']='Admin/editMicrositio/2';
$route['administrador/software']='Admin/editMicrositio/3';
$route['administrador/biomedica']='Admin/editMicrositio/4';
$route['administrador/financiera']='Admin/editMicrositio/5';
$route['administrador/pymes']='Admin/editMicrositio/6';
$route['administrador/terapia-fisica']='Admin/editMicrositio/7';

    //Update Micrositio
$route['administrador/micrositio']='Admin/addMicrositio';

//Rutas para botaniQR
$route['botaniqr']='botaniqr/Home';

//BotaniQr Plantas
$route['botaniqr/plantas']='botaniqr/Plantas';
$route['botaniqr/plantas/(:num)']='botaniqr/Plantas/showOne/$1';

//BotaniQr Noticias
$route['botaniqr/noticias']='botaniqr/Noticias';
$route['botaniqr/noticias/(:num)']='botaniqr/Noticias/showOne/$1';

//BotaniQr Administrador
$route['botaniqr/administrador']='botaniqr/Admin';
$route['botaniqr/login']='botaniqr/Admin/bLogin';
$route['botaniqr/logout']='botaniqr/Admin/bLogout';

    //Create
$route['botaniqr/administrador/agregar/noticia']='botaniqr/Admin/addNoticia';
$route['botaniqr/administrador/agregar/planta']='botaniqr/Admin/addPlanta';

    //Read
$route['botaniqr/administrador/ver/noticias/(:num)']='botaniqr/Admin/noticias/$1';
$route['botaniqr/administrador/ver/plantas/(:num)']='botaniqr/Admin/plantas/$1';

    //Update
$route['botaniqr/administrador/editar/noticia/(:num)']='botaniqr/Admin/editNoticia/$1';
$route['botaniqr/administrador/editar/planta/(:num)']='botaniqr/Admin/editPlanta/$1';

    //Delete
$route['botaniqr/administrador/eliminar/noticia/(:num)']='botaniqr/Admin/eliminarNoticia/$1';
$route['botaniqr/administrador/eliminar/planta/(:num)']='botaniqr/Admin/eliminarPlanta/$1';
