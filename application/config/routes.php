<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'login';
$route['register'] = 'register';
$route['dash'] = 'dash';
$route['permohonan-bantuan'] = "permohonan_b";




$route['default_controller'] = 'landing';
$route['404_override'] = 'errors';
$route['translate_uri_dashes'] = FALSE;
