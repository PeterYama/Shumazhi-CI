<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// $route['upload-image'] = 'Product';
// $route['store-image'] = 'Product/register';
// $route['upload-file'] = 'Product';
// $route['store-file'] = 'Product/register';