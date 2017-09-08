<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/* Routes defafault CodeIgniter */
$route['default_controller'] = 'home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* Routes custom BDR Project */


// 1. Backend Routes

/* CREATE ROUTES */
$route['bdrcms/pages/create']           = 'bdrcms/create';
$route['bdrcms/pages/create/(:any)']    = 'pages/create';
$route['bdrcms/pages/(:any)']           = 'bdrcms/pages/$1';
$route['pages']                         = 'pages/index';

$route['bdrcms/category/create']        = 'bdrcms/create';
$route['bdrcms/category/create/(:any)'] = 'category/create';
$route['bdrcms/category/edit']          = 'bdrcms/edit';
$route['bdrcms/category/edit/(:any)']   = 'bdrcms/edit';
$route['bdrcms/category/delete/(:any)'] = 'category/delete';
$route['bdrcms/category/(:any)']        = 'bdrcms/category/$1';
$route['category']                      = 'category/index';

$route['bdrcms/articles/create']        = 'bdrcms/create';
$route['bdrcms/articles/create/(:any)'] = 'articles/create';
$route['bdrcms/articles/(:any)']        = 'bdrcms/articles/$1';
$route['articles'] = 'articles/index';

$route['bdrcms/goods/create']           = 'bdrcms/create';
$route['bdrcms/goods/create/(:any)']    = 'goods/create';
$route['bdrcms/goods/(:any)']           = 'bdrcms/goods/$1';
$route['goods']                         = 'goods/index';

/* DELETE ROUTES */
$route['bdrcms/pages/delete'] = 'bdrcms/delete';
$route['bdrcms/pages/delete/(:any)'] = 'bdrcms/delete/$1';

/* UPDATE ROUTES */
$route['bdrcms/pages/edit'] = 'bdrcms/edit';
$route['bdrcms/pages/edit/(:any)'] = 'bdrcms/edit/$1';

/* REDIRECTION ROUTES */
$route['bdrcms/login'] = 'bdrcms/login';
$route['bdrcms'] = 'bdrcms/index';
$route['bdrcms/(:any)'] = 'bdrcms/index/$1';


// 2. Frontend Routes
$route['(:any)'] = 'home/index/$1';
