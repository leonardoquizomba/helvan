<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['contactos'] = 'Home/contacto';
$route['sobre-nos'] = 'Home/sobre';
$route['empresas'] = 'Home/empresa';
