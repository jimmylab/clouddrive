<?php
!defined('BASEPATH') && exit('No direct script access allowed');

/*
 * Load a php file with variables in array $data;
 * @param string	$path	Path of .php file (without unsafe characters!)
 * @param array	$data	Arguments to be passed
 */
function load($path, $data) {
	extract($data);
	if (file_exists($path)) {
		include $path;
	} else {
		show_404();
	}
}

//$path =
//isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : 
//( isset($_GET['r']) ? $_GET['r'] : '/' );
//var_dump($path);
