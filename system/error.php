<?php
!defined('BASEPATH') && exit('No direct script access allowed');

/*
 * Display a friendly error message
 * @param string	$title				Title of the error page
 * @param array	$message		Message to be shown
 * @param array	$header		Http error statues
 */
function show_error($title, $message, $header = 'HTTP/1.1 500 Internal Server Error') {
	$template = SYSPATH.'error.view.php';
	header($header);
	if(file_exists($template)) {
		$error_title = $title;
		$error_msg = $message;
		include $template;
	} else {
		echo '<meta charset="utf-8" />';
		printf('<title>%s</title><h1>%s</h1>%s', $title, $title, $message);
	}
	exit();
}

/*
 * Display a simple 404 message
 */
function show_404() {
	return show_error(
		'404 Page Not Found',
		'The page you requested was not found.',
		'HTTP/1.1 404 Not Found'
	);
}
