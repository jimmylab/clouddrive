<?php
define('BASEPATH', __DIR__, false);
define('SYSPATH', BASEPATH.DIRECTORY_SEPARATOR.'system'.DIRECTORY_SEPARATOR, false);
define('APPPATH', BASEPATH.DIRECTORY_SEPARATOR.'application'.DIRECTORY_SEPARATOR, false);

define('APPCONTROLLER', APPPATH.'controllers'.DIRECTORY_SEPARATOR, false);
define('APPVIEW', APPPATH.'views'.DIRECTORY_SEPARATOR, false);
define('APPMODEL', APPPATH.'models'.DIRECTORY_SEPARATOR, false);

//$path =
//isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : 
//( isset($_GET['r']) ? $_GET['r'] : '/' );
//var_dump($path);

require_once(SYSPATH.'router.php');
load(APPPATH.'dashboard.php', array());
?>