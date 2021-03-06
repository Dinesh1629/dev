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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['blog/(:any)'] = 'blog/view/$1';


$route['ahobilam-kshetram'] = 'welcome/temple';
// $route['visit'] = 'welcome/visit';
// $route['online'] = 'welcome/online';
$route['donations'] = 'welcome/donations';
$route['donation'] = 'welcome/donation';
$route['demo'] = 'welcome/demo';
$route['build'] = 'welcome/build';
$route['projects'] = 'welcome/projects';
$route['contact'] = 'welcome/contact';



$route['ahobilam-kshetram/history'] = 'welcome/history';
$route['ahobilam-kshetram/navanarashima'] = 'welcome/navanarashima';
$route['management'] = 'welcome/management';
$route['ahobilam-kshetram/daily-programs'] = 'welcome/dailyprograms';



$route['visit/road'] = 'welcome/road';
$route['visit/bus'] = 'welcome/bus';
$route['visit/train'] = 'welcome/train';
$route['visit/air'] = 'welcome/air';


$route['festival'] = 'welcome/festival';
$route['gallery'] = 'welcome/gallery';
$route['contact'] = 'welcome/contact';





$route['faq'] = 'welcome/faq';
$route['pricing'] = 'welcome/pricing';
$route['payment'] = 'welcome/payment';
$route['shipping'] = 'welcome/shipping';
$route['privacy-policy'] = 'welcome/privacypolicy';
$route['about'] = 'welcome/about';
$route['returnpolicy'] = 'welcome/returnpolicy';
$route['sitemap'] = 'welcome/sitemap';
$route['help'] = 'welcome/help';
