<?php

	ini_set("error_reporting", E_ALL & ~E_NOTICE);
	ini_set("display_errors", "On");
	ob_start();

	require_once("app/config/config.php");
	\library\benchmark::start();
	if (DEBUG_ROUTES) {
		\library\FB::log("Class: {$uri->controller}->{$uri->function}A");
	}
	$obj = new $uri->controller($uri);
	$obj->{$uri->function."A"}();
	\library\benchmark::stop(1);
	ob_end_flush();
?>
