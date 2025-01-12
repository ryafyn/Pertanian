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
$route['default_controller'] = 'c_dashboard';
$route['dashboard'] = 'c_dashboard/index';
$route['produk'] = 'c_dashboard/produk';
$route['berita'] = 'c_dashboard/berita';
$route['kontak'] = 'c_dashboard/kontak';

$route['userlogin'] = 'c_dashboard/userlogin';
$route['login_action'] = 'c_userlogin/login_action';

$route['c_halberita'] = 'c_halberita/index';
$route['c_haladmin'] = 'c_haladmin/index';
$route['c_haladmin/hapus/(:any)'] = 'c_haladmin/hapus/$1';
$route['c_haluser'] = 'c_haluser/index';
$route['c_haluser/hapus/(:any)'] = 'c_haluser/hapus/$1';
$route['c_halproduk'] = 'c_halproduk/index';
$route['halwelcome'] = 'c_login/halwelcome';
$route['produk'] = 'c_halproduk/produk';
$route['berita'] = 'c_halberita/news';  
$route['logout'] = 'c_login/logout';
$route['berita/detail/(:num)'] = 'c_halberita/detail/$1';

$route['c_transaksi'] = 'c_transaksi/index';
$route['c_transaksi/update_status/(:num)/(:any)'] = 'c_transaksi/update_status/$1/$2';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// coba
// $route['c_halproduk'] = 'c_halproduk/index';
// $route['c_halproduk/tambah'] = 'c_halproduk/tambah';
// $route['c_halproduk/edit/(:any)'] = 'c_halproduk/edit';
// $route['c_halproduk/hapus/(:any)'] = 'c_halproduk/hapus';



