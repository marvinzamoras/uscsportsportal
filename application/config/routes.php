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
$route['site/home'] = 'site/home';
$route['login'] = 'login';
$route['news/index'] = 'news/index';
//$route['announcement_admin/edit/(:any)'] = 'announcement_admin/edit/$1';
$route['users_admin/index'] = 'users_admin/index';
$route['game_admin/index'] = 'game_admin/index';
$route['match_admin/index'] = 'match_admin/index';
$route['team_admin/index'] = 'team_admin/index';
$route['news_admin/index'] = 'news_admin/index';
$route['news_admin/delete/(:any)'] = 'news_admin/delete/$1';
$route['users_admin'] = 'users_admin';
$route['game_admin'] = 'game_admin';
$route['news_admin'] = 'news_admin';
$route['team_admin'] = 'team_admin';
$route['announcement_admin/index'] = 'announcement_admin/index';
$route['announcement_admin/delete/(:any)'] = 'announcement_admin/delete/$1';
$route['announcement_admin'] = 'announcement_admin';
$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';
$route['announcement/index'] = 'announcement/index';
$route['announcement/(:any)'] = 'announcement/view/$1';
$route['announcement'] = 'announcement';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'site/home';

//$route['site/home'] = 'news';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
