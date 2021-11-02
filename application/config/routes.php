<?php
defined('BASEPATH') or exit('No direct script access allowed');

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


//landing start
$route['DaftarUser'] = 'Welcome/daftar';
$route['Register'] = 'Welcome/register';
$route['MasukUser'] = 'Welcome/login';
$route['Login'] = 'Welcome/cek';
$route['Logout'] = 'Welcome/logout';
$route['UserUpdate'] = 'Auth/updateData';
$route['passwordUpdate'] = 'Auth/uPassword';


//landing end
$route['viewGelombang'] = 'Welcome/gelView';
//dashboard user
$route['Dashboard'] = 'Auth/index';
$route['Formulir'] = 'Auth/Formulir';
$route['PengaturanAkun'] = 'Auth/setting';
$route['InsertFormulir'] = 'Auth/insert';
$route['pdf/formulir'] = 'Auth/cetak_formulir';
//end dashboard user


//dashboard admin
$route['DashboardAdmin'] = 'Admin/index';
$route['CalonSiswa'] = 'Admin/pendaftar';
$route['dataDaftar'] = 'Admin/getPendaftar';
$route['activated/(:num)'] = 'Admin/actived/$1';
$route['logUser'] = 'Admin/getAktivitas';
$route['deleteActivity'] = 'Admin/delAct';
$route['Gelombang'] = 'Admin/gelV';
$route['getGelombang'] = 'Admin/viewGelombang';
$route['gelombang'] = 'Admin/insertGelombang';
$route['deleteGelombang'] = 'Admin/delGel';
$route['set_gel/(:any)'] = 'Admin/activegel/$1';
$route['dft_update/(:any)'] = 'Admin/statusdftupdate/$1';
$route['updateGelombang'] = 'Admin/updateGel';
$route['DataAkun'] = 'Admin/dataakun';
$route['getData'] = 'Admin/dataView';
$route['activated_akun/(:any)'] = 'Admin/akun/$1';
$route['updateAkun'] = 'Admin/updateakun';
$route['arsip-data-ppdb'] = 'Admin/arsip';
$route['arsip'] = 'Admin/arsipdata';
$route['Publish/(:any)'] = 'Admin/publishGel/$1';

$route['Formulir-PPDB/(:any)'] = 'Admin/formulir_ppdb/$1';

$route['Setting-Landing-Pages'] = 'Admin/landing';
$route['Tentang'] = 'Admin/tentang';
$route['datatentang'] = 'Admin/viewTentang';

$route['ac_tentang/(:any)'] = 'Admin/tentang_act/$1';

$route['DeleteT'] = 'Admin/deleteTentang';
$route['EditTentang/(:any)'] = 'Admin/Utentang/$1';

$route['Alur'] = 'Admin/alur';
$route['viewalur'] = 'Admin/Valur';
$route['ac_alur/(:any)'] = 'Admin/alur_ac/$1';
$route['EditAlur/(:any)'] = 'Admin/editalur/$1';


//end d admin
