<?php

	$bin = exec('which lessc');
	$opts = "-x";
	$theme = $argv[1];
	
	$path = realpath(dirname(__FILE__)."/../themes/$theme");
	$target = realpath(dirname(__FILE__)."/../cached/css");
	
	$files = glob("$path/*.less");
	foreach ($files as $file) {
		$_base = explode(".",basename($file))[0];
		$_target = "$target/$_base.css";
		echo "Compiling $_base..";
		exec("$bin $opts $file $_target");
		echo "done.\n";		
	}
	echo "all files completed.\n";
	
?>