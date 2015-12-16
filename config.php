<?php
!defined('BASEPATH') && exit('No direct script access allowed');

// Define the path of models, views and controllers
define('APPCONTROLLER', APPPATH.'controllers'.DIRECTORY_SEPARATOR, false);
define('APPVIEW', APPPATH.'views'.DIRECTORY_SEPARATOR, false);
define('APPMODEL', APPPATH.'models'.DIRECTORY_SEPARATOR, false);

$config = array();

// Define index controller
$config['default_controller'] = 'dashboard';

// Define database credentials
$config['db']['dsn'] = 'mysql:host=localhost;dbname=cloud-drive';
$config['db']['user'] = 'cloud-drive_root';
$config['db']['pass'] = 'WKt3BzA9nR8uaHaZ';
