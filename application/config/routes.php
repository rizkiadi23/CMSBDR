<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Routes defafault CodeIgniter */
$route['default_controller'] 	= 'home/index';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;

/* Routes custom BDR Project */


// 1. Backend Routes

/* CREATE ROUTES */
$route['bdrcms/pages/create']			= 'bdrcms/create';

/* DELETE ROUTES */
$route['bdrcms/pages/delete']			= 'bdrcms/delete';
$route['bdrcms/pages/delete/(:any)'] 	= 'bdrcms/delete/$1';

/* UPDATE ROUTES */
$route['bdrcms/pages/edit']				= 'bdrcms/edit';
$route['bdrcms/pages/edit/(:any)']		= 'bdrcms/edit/$1';

/* REDIRECTION ROUTES */
$route['bdrcms/login']					= 'bdrcms/login';
$route['bdrcms']						= 'bdrcms/index';
$route['bdrcms/(:any)']					= 'bdrcms/index/$1';


// 2. Frontend Routes
$route['(:any)']				= 'home/index/$1';
