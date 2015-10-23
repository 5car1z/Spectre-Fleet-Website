<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['user/create'] = 'users/create';
$route['user/(:any)'] = 'users/view/$1';
$route['user'] = 'users';
$route['users'] = 'users';
$route['thankyou/(:any)'] = 'thanks/view/$1';
$route['(:any)'] = 'pages/view/$1/';
$route['404_override'] = '';
$route['default_controller'] = 'pages/view';
$route['translate_uri_dashes'] = FALSE;
