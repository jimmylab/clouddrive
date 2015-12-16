<?php
!defined('BASEPATH') && exit('No direct script access allowed');

/*
 * Controller template class, create controllers to extend it
 */
class Controller {

	$

	/*
	 *
	 */
	function __construct() {
		//
	}

	/*
	 *
	 */
	function load_model($model) {
		// Invokes by programmer, no checking required
		load(APPMODEL.$model.'.php', array());
	}

	/*
	 * Renders a view with args
	 * @param string	$view	of The view's filename (without .php)
	 * @param array	$args	Array of arguments
	 */
	protected function render($view, $args) {
		// Invokes by programmer, no checking required
		load(APPVIEW.$view.'.php', $args);
	}
}

?>