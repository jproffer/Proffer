<?php
/**
* @filename config.php
* @desc configuration file.
*/

function print_h($data) {
	echo "<pre>".print_r($data,true)."</pre>";
}
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


define("SHOW_ERRORS",		true);
define("DEBUG_INCLUDES",	true);
define("DEBUG_ROUTES",		true);
define("BENCHMARK",			true);
define("DEBUG_TEMPLATES",	true);

$http = ["80" => "http", "443" => "https"];
$http = $http[$_SERVER['SERVER_PORT']];
define("HTTPS", $http);

define("VARCHAR",	0);
define("DATE",		1);
define("TIME",		2);
define("DATETIME",	3);
define("INT",		4);
define("CHK",		5);
define("FLOAT",		6);
define("PASSWORD", 	7);
define("CURRENCY",	8);

define("DOMAIN",strtolower(rtrim($_SERVER['SERVER_NAME'],"/")));

date_default_timezone_set("UTC");


// APP PATHS
if (!isset($_SERVER['DOCUMENT_ROOT'])) {
	define("PATH_ROOT",dirname(__FILE__."../../"));
} else {
	define("PATH_ROOT",$_SERVER['DOCUMENT_ROOT']);
}
define("PATH_WWW",HTTPS."://".DOMAIN);
define("PATH_APP",PATH_ROOT."app");
define("PATH_LIB",PATH_APP."/library");

// debugger
//require_once(PATH_LIB."/firephp.php");
// error handler
//require_once(PATH_APP."/Core/ErrorHandler.php");
// autoloader
if (!file_exists(PATH_APP."/vendor/autoload.php")) {
throw new Exception("Error: Please run 'composer install' in app/ first.");
}
require_once(PATH_APP."/vendor/autoload.php");
require_once(PATH_APP."/Core/autoloader.php");

use   \config\Config;

define("ERROR_TEMPLATE_PATH",PATH_ROOT."/app/error_pages");

define("UPLOAD_IMG_DIR", PATH_ROOT."/profile/images");
define("UPLOAD_DOC_DIR", PATH_ROOT."/profile/documents");
define("UPLOAD_HR_DIR", PATH_ROOT."/profile/hr");
define("UPLOAD_TILE_DIR", PATH_ROOT."/profile/tiles");
// SMARTY
define("SMARTY_DIR", PATH_LIB."/smarty/");
define("s_config_path",SMARTY_DIR);
// CRYPTO
define("CRYPTO_MASTERKEY", 'CHANGEME-CHANGEME-CHANGEME');
define("USE_CRYPTO",TRUE);

session_start();

$_GlobalIncludes = array(
	"GEOIPKEY"=>'',
	"GOOGLEAUTOLOADER"=>'<script type="text/javascript" src=""></script>'
);
Config::$userpath='default';

Config::$HTTPS				= $http;
Config::$themepath			= "/themes/default";
Config::$TPL_PATH			= PATH_APP."/views/".Config::$userpath;
Config::$s_template_path		= Config::$TPL_PATH;
Config::$s_compile_path		= PATH_APP."/.templates_c";
Config::$s_cache_path		= PATH_APP."/.cache";
include_once("development.php");
        // TYPES
$uri = new \Core\Uri();

?>

