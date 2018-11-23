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

//homepage
$route['default_controller'] = 'home/beranda';
$route['culinary'] = 'home/culinary';
$route['menu'] = 'home/menu';
$route['location'] = 'home/location';
$route['souvenirs'] = 'home/souvenirs';
$route['culinar'] = 'home/culinar';
$route['about_us'] = 'home/about_us';
//location
$route['balam'] = 'location/balam';
$route['lamsel'] = 'location/lamsel';
//balam
$route['balam1'] = 'balam/balam1';
$route['balam2'] = 'balam/balam2';
$route['balam3'] = 'balam/balam3';
$route['balam4'] = 'balam/balam4';
$route['balam5'] = 'balam/balam5';
$route['balam6'] = 'balam/balam6';
$route['balam7'] = 'balam/balam7';
$route['balam8'] = 'balam/balam8';
$route['balam9'] = 'balam/balam9';
$route['balam10'] = 'balam/balam10';
//lamsel
$route['lamsel1'] = 'lamsel/lamsel1';
$route['lamsel2'] = 'lamsel/lamsel2';
$route['lamsel3'] = 'lamsel/lamsel3';
$route['lamsel4'] = 'lamsel/lamsel4';
$route['lamsel5'] = 'lamsel/lamsel5';
$route['lamsel6'] = 'lamsel/lamsel6';
$route['lamsel7'] = 'lamsel/lamsel7';
$route['lamsel8'] = 'lamsel/lamsel8';
$route['lamsel9'] = 'lamsel/lamsel9';
$route['lamsel10'] = 'lamsel/lamsel10';
//lambar
$route['lambar1'] = 'lambar/lambar1';
$route['lambar2'] = 'lambar/lambar2';
$route['lambar3'] = 'lambar/lambar3';
$route['lambar4'] = 'lambar/lambar4';
$route['lambar5'] = 'lambar/lambar5';
$route['lambar6'] = 'lambar/lambar6';
$route['lambar7'] = 'lambar/lambar7';
$route['lambar8'] = 'lambar/lambar8';
$route['lambar9'] = 'lambar/lambar9';
$route['lambar10'] = 'lambar/lambar10';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['itemCRUD'] = "itemCRUD/index";

$route['itemCRUD/(:num)'] = "itemCRUD/show/$1";

$route['itemCRUDCreate']['post'] = "itemCRUD/store";

$route['itemCRUDEdit/(:any)'] = "itemCRUD/edit/$1";

$route['itemCRUDUpdate/(:any)']['put'] = "itemCRUD/update/$1";

$route['itemCRUDDelete/(:any)']['delete'] = "itemCRUD/delete/$1";
//homepage
