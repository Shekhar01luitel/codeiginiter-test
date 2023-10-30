<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'post';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// Post Crud 
$route['post'] = 'Post/index';
$route['post/create'] = 'Post/create';

// Array Check
$route['check'] = 'Array_check/index';
$route['arraylist'] = 'Array_check/list';

$route['arraycheck'] = 'Array_check/arraycheck';
