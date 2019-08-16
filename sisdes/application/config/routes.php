<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['home'] = 'Home/index';
$route['penduduk'] = 'penduduk/list';
// $route['penduduk'] = 'Home/penduduk';
$route['logout'] = 'Login/logout';
$route['sppak'] = 'Surat/sppak';
$route['spwwn'] = 'Surat/sppwn';
$route['spk'] = 'Surat/spk';
$route['skck'] = 'Surat/skck';
$route['spanak'] = 'Surat/spanak';
$route['sprw'] = 'Surat/sprw';