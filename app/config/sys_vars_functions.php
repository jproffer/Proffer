<?php
	date_default_timezone_set("UTC");

	define("SHOW_ERRORS",		true);
	define("DEBUG_INCLUDES",	true);
	define("DEBUG_ROUTES",		true);
	define("BENCHMARK",			true);
	define("DEBUG_TEMPLATES",	true);

	ini_set("post_max_size", 134217728);
	ini_set("max_file_size", 134217728);
	ini_set("upload_max_filesize", 134217728);
	 
	 
	 /**
	 * Wrap print_r in <pre> tags so they display in a more readable format via web
	 * @param mixed $data 
	 */
	function print_h($data) {
		echo "<pre>".print_r($data,true)."</pre>";
	}
	
	/**
	 * If $class is an object, print out its methods.  Otherwise, execute a regular print_h()
	 * @param mixed $class 
	 */
	function print_m($class) {
		if (gettype($class)!="object") {
			print_h($class);
		} else {
			print_h(get_class_methods($class));
		}
	}
	
	
	function safestring($text) { 
		return strtr($text, array(
	"\x00" => '\x00',
	"\n" => '\n', 
	"\r" => '\r', 
	'\\' => '\\\\',
	"'" => "\'", 
	'"' => '\"', 
	"\x1a" => '\x1a'
		));
	}

?>
