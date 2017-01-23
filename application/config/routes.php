<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
*/
$route['default_controller'] 		= 'home';
$route['404_override'] 				= '';
$route['translate_uri_dashes'] 		= FALSE;

//route login
$route['proses']					='login/login_form';
$route['logout']					='login/logout';

//route data pegawai
$route['data-pegawai']				='data_pegawai';
$route['data-pegawai/input']		='data_pegawai/input';
$route['data-pegawai/proses']		='data_pegawai/proses';
$route['data-pegawai/read/:num']	='data_pegawai/lihat';
$route['data-pegawai/edit/:num']	='data_pegawai/edit';
$route['data-pegawai/update']		='data_pegawai/update';
$route['data-pegawai/delete/:num']	='data_pegawai/delete';

//route data absen
$route['data-absen']				='data_absen';
$route['data-absen/input']			='data_absen/input';
$route['data-absen/proses']			='data_absen/proses';
$route['data-absen/edit/:num']		='data_absen/edit';
$route['data-absen/update']			='data_absen/update';
$route['data-absen/delete/:num']	='data_absen/delete';

//route data cuti
$route['data-cuti']					='data_cuti';
$route['data-cuti/input']			='data_cuti/input';
$route['data-cuti/proses']			='data_cuti/proses';
$route['data-cuti/edit/:num']		='data_cuti/edit';
$route['data-cuti/update']			='data_cuti/update';
$route['data-cuti/delete/:num']		='data_cuti/delete';

//route data gaji
$route['data-gaji']					='data_gaji';
$route['data-gaji/input']			='data_gaji/input';
$route['data-gaji/proses']			='data_gaji/proses';
$route['data-gaji/edit/:num']		='data_gaji/edit';
$route['data-gaji/update']			='data_gaji/update';
$route['data-gaji/delete/:num']		='data_gaji/delete';
$route['data-gaji/print']			='data_gaji/printt';




