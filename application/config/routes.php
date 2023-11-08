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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Login
$route['login']    = 'Login';

//Corraloneros
$route['corraloneros_menu']    = 'Corraloneros';
//administrador Gruas
$route['add_cranesG']    = 'Corraloneros/addGruas';
$route['insert_cranes'] = 'Corraloneros/insertGruas';
$route['delete_cranesG/(:any)'] = 'Corraloneros/borrar_grua';
//administrador Arrastres
$route['add_drag']    = 'Corraloneros/addArrastres';
$route['insert_drag'] = 'Corraloneros/insertArrastre';

//Administrador
$route['admin_menu']    = 'Administrador';
//corralones
$route['admin_addCrane'] = 'Administrador/adminCorralones';
$route['insert_Cranes'] = 'Administrador/insertCorralones';
$route['get_Cranes'] = 'Administrador/recupera_corralon';
$route['update_Cranes'] = 'Administrador/actualiza_corralon';
$route['delete_Cranes/(:any)'] = 'Administrador/borrar_corralon';
$route['admin_mostpuebla']    = 'Administrador/mostrar_map';
$route['admin_mostcorralones']    = 'Administrador/mostrar_corralones';

//usuarios
$route['admin_addUsers'] = 'Administrador/adminUsuarios';
$route['get_Users'] = 'Administrador/recupera_usuario';
$route['update_Users'] = 'Administrador/actualiza_usuario';
$route['insert_Users'] = 'Administrador/insertUsuarios';
$route['delete_Users/(:any)'] = 'Administrador/borrar_usuario';

//trazado de rutasF
$route['admin_routes'] = 'Administrador/adminRutas';
$route['search_info'] = 'Administrador/buscaDatos';
$route['try_info'] = 'Administrador/llenadoDatos';
$route['show_c'] = 'Administrador/mostrar_corralones';
$route['insert_arrastre'] = 'Administrador/insertArrastre';
