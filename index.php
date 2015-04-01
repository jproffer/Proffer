<?php
	ob_start();

	require_once("app/config/bootstrap.php");

	if (BENCHMARK) { \library\benchmark::start(); }

	$controller = "\\Controller\\{$uri->controller}";
	$obj = new $controller($uri);
	$obj->{$uri->function."A"}();

	if (BENCHMARK) { \library\benchmark::stop();  }
	ob_end_flush();
?>
